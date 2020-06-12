<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Exercise;
use App\Category;

class ExerciseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $exercises = Exercise::with('category')->get()
            ->sortBy(function($exercise){
                return $exercise->category->name;
            })
            ->groupBy(function($exercise){
                return $exercise->category->name;
            });

        return view('exercises.index', compact('exercises'));
    }


    public function create()
    {
        $this->authorize('create', Exercise::class);

        $categories = Category::orderBy('name', 'asc')->get();
        return view('exercises.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $this->authorize('create', Exercise::class);

        $data = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'image',
        ]);
        

        $imagePath = request('image')->store('exercises', 'public');
        $thumbnailImagePath = request('image')->store('exercises/thumbnails', 'public');
        $thumbnailImage = Image::make(public_path("storage/{$thumbnailImagePath}"))->fit(150, 150);
        $thumbnailImage->save();

        $exercise = Exercise::create([
            'name' => $data['name'],
            'category_id' => $data['category'],
            'image' => $imagePath,
            'image_thumbnail' => $thumbnailImagePath,
        ]);

        return redirect()->route('exercises.index');
    }

    public function edit($id)
    {
        $exercise = Exercise::find($id);
        $this->authorize('update', $exercise);

        return view('exercises.edit', compact('exercise'));
    }


    public function update($id)
    {
        $exercise = Exercise::find($id);
        $this->authorize('update', $exercise);

        $data = request()->validate([
            'name' => 'required',
            'image' => 'image'
        ]);

        if(request('image')){
            Storage::disk('public')->delete($exercise->image);
            Storage::disk('public')->delete($exercise->image_thumbnail);

            $imagePath = request('image')->store('exercises', 'public');
            $thumbnailImagePath = request('image')->store('exercises/thumbnails', 'public');
            $thumbnailImage = Image::make(public_path("storage/{$thumbnailImagePath}"))->fit(150, 150);
            $thumbnailImage->save();

            $imageArray = ['image' => $imagePath, 'image_thumbnail' => $thumbnailImagePath];
        }

        $exercise->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect()->route('exercises.index');
    }
}
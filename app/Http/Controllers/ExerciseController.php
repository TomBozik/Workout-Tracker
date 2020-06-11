<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        ]);

        $exercise = Exercise::create([
            'name' => $data['name'],
            'category_id' => $data['category'],
        ]);

        return redirect()->route('exercises.index');
    }
}
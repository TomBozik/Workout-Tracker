<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;
use App\Exercise;

class RoutineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $authUserId = auth()->user()->id;

        $routines = Routine::with('exercises', 'exercises.category')->where('user_id', $authUserId)->get()->map(function($routine){
            $routine->exercises = $routine->exercises->groupBy(function($exercise){ 
                return $exercise->category->name;
            });
            return $routine;
        });
        
        return view('routines.index', compact('routines'));
    }


    public function create()
    {
        $exercises = Exercise::with('category')->get()
            ->sortBy(function($exercise){
                return $exercise->category->name;
            })
            ->groupBy(function($exercise){
                return $exercise->category->name;
            });

        return view('routines.create', compact('exercises'));
    }


    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'exercises' => 'required',
        ]);

        $routine = auth()->user()->routines()->create([
            'name' => $data['name'],
        ]);

        $routine->exercises()->sync($data['exercises']);
        
        return redirect()->route('routines.index');
    }


    public function edit($id)
    {
        $routine = Routine::with('exercises')->find($id);
        $this->authorize('update', $routine);

        $exercises = Exercise::with('category')->get()
            ->sortBy(function($exercise){
                return $exercise->category->name;
            })
            ->groupBy(function($exercise){
                return $exercise->category->name;
            });

        return view('routines.edit', compact('routine', 'exercises'));
    }


    public function update(Request $request, $id)
    {
        $routine = Routine::find($id);
        $this->authorize('update', $routine);

        $data = request()->validate([
            'name' => 'required',
            'exercises' => 'required'
        ]);

        $routine->update([
            'name' => $data['name'],
        ]);

        $routine->exercises()->sync($data['exercises']);

        return redirect()->route('routines.index');
    }


    public function destroy($id)
    {
        $routine = Routine::find($id);
        $this->authorize('delete', $routine);
        $routine->exercises()->detach();
        $routine->delete($id);

        return redirect()->route('routines.index');
    }
}
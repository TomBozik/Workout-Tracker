<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Set;
use App\Exercise;

class SetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $authUserId = auth()->user()->id;
        $sets = Set::with('exercise')->where('user_id', $authUserId)->get()
            ->sortByDesc('created_at')
            ->groupBy(function($set){
                return $set->created_at->format('d-m-Y');
            });
        
        return view('sets.index', compact('sets'));
    }


    public function create($exerciseId)
    {
        $this->authorize('create', Set::class);
        $authUserId = auth()->user()->id;

        $exercise = Exercise::find($exerciseId);
        $previousSets = Set::where(['exercise_id' => $exerciseId, 'user_id' => $authUserId ])->orderBy('created_at', 'desc')->limit(50)->get();
        
        return view('sets.create', compact('exercise', 'previousSets'));
    }


    public function store(Request $request)
    {
        $this->authorize('create', Set::class);
        $authUserId = auth()->user()->id;

        $data = request()->validate([
            'reps' => ['required', 'numeric'],
            'weight' => ['required', 'numeric'],
            'exerciseId' => 'required'
        ]);

        $exerciseId = $data['exerciseId'];

        $set = Set::create([
            'reps' => $data['reps'],
            'weight' => $data['weight'],
            'exercise_id' => $exerciseId,
            'user_id' => auth()->user()->id,
        ]);

        $previousSets = Set::where(['exercise_id' => $exerciseId, 'user_id' => $authUserId ])->orderBy('created_at', 'desc')->limit(50)->get();
        return response()->json($previousSets);
        // return redirect()->back();
    }


    public function edit($id)
    {
        $set = Set::find($id);
        $this->authorize('update', $set);

        return view('sets.edit', compact('set'));
    }


    public function update(Request $request, $id)
    {
        $set = Set::find($id);
        $this->authorize('update', $set);

        $data = request()->validate([
            'reps' => 'required',
            'weight' => 'required'
        ]);

        $set->update([
            'reps' => $data['reps'],
            'weight' => $data['weight'],
        ]);

        return redirect()->route('sets.index');
    }


    public function destroy($id)
    {
        $set = Set::find($id);
        $this->authorize('delete', $set);
        
        $set->delete($id);

        return redirect()->route('sets.index');
    }
}
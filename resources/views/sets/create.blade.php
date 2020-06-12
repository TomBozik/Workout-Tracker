@extends('layouts.app')

@section('content')
<div class="container">
    <create-set :data="{{ $previousSets }}" :exercise="{{ $exercise }}"></create-set>
</div>
@endsection


{{-- <table class="table">
    <tr style="background-color: #F7F7F7">
        <th class="text-center">Reps</th>
        <th class="text-center">Weight</th>
        <th class="text-center">Date</th>
    </tr>
    @foreach($previousSets as $set)
    <tr>
        <td class="text-center">{{ $set->reps }}</td>
        <td class="text-center">{{ $set->weight }}</td>
        <td class="text-center">{{ $set->created_at }}</td>
    </tr>
    @endforeach
</table> --}}
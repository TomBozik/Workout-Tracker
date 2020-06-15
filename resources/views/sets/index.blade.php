@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>My Sets</h1>
            </div>

            <table class="table table-bordered">
                @foreach($sets as $day => $sets_list)
                <tr style="background-color: #F7F7F7">
                    <th>{{ $day }}</th>
                    <th class="text-center">Reps</th>
                    <th class="text-center">Weight</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($sets_list as $set)
                <tr>
                    <td>{{ $set->exercise->name }}</td>
                    <td class="text-center">{{ $set->reps }}</td>
                    <td class="text-center">{{ $set->weight }}</td>
                    <td class="text-center">
                        <a href="{{ route('sets.edit', $set->id) }}">Edit</a>
                    </td>

                </tr>
                @endforeach
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
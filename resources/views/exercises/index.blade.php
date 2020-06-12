@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>Exercises</h1>
            </div>

            <table class="table">

                @foreach($exercises as $cat => $exercises_list)
                
                    <tr style="background-color: #F7F7F7">
                        <th>
                            {{ $cat }}: {{ $exercises_list->count() }} exercises
                        </th>
                        <th class="text-right">Action</th>
                    </tr>

                    @foreach ($exercises_list as $exercise)
                        <tr>
                            @if($exercise->image_thumbnail)
                                <td> <img src="/storage/{{$exercise->image_thumbnail}}"> {{ $exercise->name }}</td>
                            @else
                                <td>{{ $exercise->name }} </td>
                            @endif
                            @role('admin')
                                <td class="text-right"><a href="{{ route('exercises.edit', $exercise->id) }}">Edit</a></td>
                            @else
                                <td class="text-right">-</td>
                            @endrole
                        </tr>
                    @endforeach

                @endforeach

                @role('admin')
                <tr><a href="{{ route('exercises.create') }}">New Exercise</a></tr>
                @endrole

            </table>

        </div>
    </div>
</div>
@endsection
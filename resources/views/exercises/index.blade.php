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
                            <td>{{ $exercise->name }}</td>
                            <td class="text-right"><a href="#">-</a></td>
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
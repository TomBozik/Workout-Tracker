@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>My Routines</h1>
            </div>

            <th><a href="{{ route('routines.create') }}">New Routine</a></th>

            <table class="table">

                @foreach($routines as $routine)

                    <tr style="background-color: rgb(32, 214, 41)">
                        <th>{{ $routine->name }} </th>
                        <th class="text-right"><a href="{{ route('routines.edit', $routine->id) }}" class="pl-3">Edit</a>
                        </th>
                    </tr>

                    @foreach($routine->exercises as $cat => $exercises_list)

                        <tr style="background-color: #F7F7F7">
                            <th colspan="2">
                                {{ $cat }}
                            </th>
                        </tr>

                        @foreach ($exercises_list as $exercise)
                            <tr>
                                <td colspan="2"><a href="{{ route('sets.create', $exercise->id) }}">{{ $exercise->name }}</a> </td>
                            </tr>
                        @endforeach

                    @endforeach

                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
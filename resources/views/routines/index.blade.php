@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index of Routines</div>
                    @foreach($routines as $routine)
                        <h5 class="pl-2 pt-1">{{ $routine->name }}</h5>
                        <a href="{{ route('routines.edit', $routine->id) }}" class="pl-3">Edit Routine</a>              
                        <ul>
                            @foreach($routine->exercises as $exercise)
                                <li>{{ $exercise->name }}</li>
                            @endforeach
                        </ul>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
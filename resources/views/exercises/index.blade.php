@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index of Exercises</div>
                <div class="card-body">
                    @foreach($exercises as $exercise)
                        <p> {{ $exercise->category->name }} - {{ $exercise->name }} </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
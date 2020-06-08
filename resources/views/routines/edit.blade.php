@extends('layouts.app')

@section('content')
<div class="container">
    {{$routine->name}}
    <!-- <form action="{{ route('routines.update', $routine->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Routine</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') ?? $routine->name }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Routine</button>
                </div>
            </div>
        </div>
    </form> -->
</div>
@endsection
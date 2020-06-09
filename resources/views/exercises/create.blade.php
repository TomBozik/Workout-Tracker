@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('exercises.store') }}" method="post">
                @csrf
                <div class="row">
                    <h3>Create Exercise</h3>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <select name="category" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Create Exercise</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
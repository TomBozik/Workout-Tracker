@extends('layouts.app')

@section('content')
<div class="container">    
    <form action="{{ route('exercises.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h3>Create Exercise</h3>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <select name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                
                <div class="row pt-4">
                    <button class="btn btn-primary">Create Exercise</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
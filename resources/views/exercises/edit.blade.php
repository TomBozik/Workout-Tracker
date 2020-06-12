@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('exercises.update', $exercise->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <h3>Edit Exercise</h3>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') ?? $exercise->name }}" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @if($exercise->image)
                    <img src="/storage/{{$exercise->image}}"> 
                @endif

                <div class="form-group row">
                    <!-- <label for="image" class="col-md-4 col-form-label">Image</label> -->
                    <input type="file" class="input-control-file" id="image" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Edit Exercise</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

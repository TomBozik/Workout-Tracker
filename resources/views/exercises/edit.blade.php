@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('exercises.update', $exercise->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col">
                        <h3>Edit - {{ $exercise->name}}</h3>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-sm-12">
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

                        <div class="form-group row">
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
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <img src="/storage/{{$exercise->image}}" style="max-width:100%;"> 
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>
@endsection

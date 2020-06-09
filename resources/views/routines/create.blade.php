@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('routines.store') }}" method="post">
                @csrf
                <div class="row">
                    <h3>Create Routine</h3>
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
                

                @foreach($exercises as $cat => $exercises_list)
                    <strong>{{ $cat }}: </strong><br>
                    @foreach ($exercises_list as $exercise)
                        <input type="checkbox" name="exercises[]" value="{{ $exercise->id }}">
                        <label>{{ $exercise->name }}</label><br>
                    @endforeach
                @endforeach


                <div class="row pt-4">
                    <button class="btn btn-primary">Create Routine</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
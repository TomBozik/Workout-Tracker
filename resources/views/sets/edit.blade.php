@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <div class="d-flex justify-content-between row">
                <h3>Edit Set</h3>

                <form action="{{ route('sets.destroy', $set->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Remove Set</button>
                </form>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('sets.update', $set->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group row">
                    <label for="reps" class="col-md-4 col-form-label">Reps</label>
                    <input id="reps" type="number" inputmode="numeric" pattern="[0-9]*" class="form-control @error('reps') is-invalid @enderror" name="reps"
                        value="{{ old('reps') ?? $set->reps }}" required autofocus>
                    @error('reps')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label">Weight</label>
                    <input id="weight" type="number" inputmode="numeric" pattern="[0-9]*" class="form-control @error('weight') is-invalid @enderror"
                        name="weight" value="{{ old('weight') ?? $set->weight }}" required>
                    @error('weight')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Eidt Set</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
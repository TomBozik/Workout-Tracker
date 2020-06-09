@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

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

    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{ route('sets.update', $set->id) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label for="reps" class="col-md-4 col-form-label">Reps</label>
                    <input id="reps" type="text" class="form-control @error('reps') is-invalid @enderror" name="reps"
                        value="{{ old('reps') ?? $set->reps }}" required autocomplete="reps" autofocus>
                    @error('reps')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label">Weight</label>
                    <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                        value="{{ old('weight') ?? $set->weight }}" required autocomplete="weight" autofocus>
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
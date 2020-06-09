@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 offset-2">

            <div class="d-flex justify-content-between row">

                <h3>Edit Routine</h3>

                <form action="{{ route('routines.destroy', $routine->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Remove Routine</button>
                </form>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{ route('routines.update', $routine->id) }}" method="post">
                @csrf
                @method('PATCH')

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


                @foreach($exercises as $cat => $exercises_list)
                    {{ $cat }}: <br>
                    @foreach ($exercises_list as $exercise)
                        <input type="checkbox" name="exercises[]" value="{{ $exercise->id }}"
                            {{ $routine->exercises->contains($exercise->id) ? 'checked' : '' }}>
                        <label>{{ $exercise->name }}</label><br>
                    @endforeach
                @endforeach


                <div class="row pt-4">
                    <button class="btn btn-primary">Save Routine</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
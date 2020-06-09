@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <form action="{{ route('sets.store')}}" method="post">
                @csrf
                <div class="row">
                    <h3>{{$exercise->name}}</h3>
                </div>

                <div class="form-group row">
                    <label for="reps" class="col-md-4 col-form-label">Reps</label>
                    <input id="reps" type="number" inputmode="numeric" pattern="[0-9]*" class="form-control @error('reps') is-invalid @enderror" name="reps"
                        value="{{ old('reps') }}" required autofocus>

                    @error('reps')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="weight" class="col-md-4 col-form-label">Weight</label>
                    <input id="weight" type="numer" inputmode="numeric" pattern="[0-9]*" class="form-control @error('weight') is-invalid @enderror"
                        name="weight" value="{{ old('weight') }}" required >

                    @error('weight')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <input type="hidden" name="exerciseId" value="{{$exercise->id}}">

                <div class="row pt-4">
                    <button class="btn btn-primary">Create Set</button>
                </div>
            </form>
            
        </div>
    </div>


    <div class="row justify-content-center pt-5">
        <div class="col-lg-8 col-sm-12">

            <table class="table">
                <tr style="background-color: #F7F7F7">
                    <th class="text-center">Reps</th>
                    <th class="text-center">Weight</th>
                    <th class="text-center">Date</th>
                </tr>
                @foreach($previousSets as $set)
                <tr>
                    <td class="text-center">{{ $set->reps }}</td>
                    <td class="text-center">{{ $set->weight }}</td>
                    <td class="text-center">{{ $set->created_at }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <div class="d-flex justify-content-between row">
                <h3>Edit Set</h3>

                <form id="delete_from_{{$set->id}}" method="POST" action="{{ route('sets.destroy', $set->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <a href="javascript:void(0);" data-id="{{$set->id}}" class="_delete_data">
                            <span class="btn btn-danger">Delete</span>
                        </a>                    
                    </div>
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

@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $('._delete_data').click(function(e){
        var data_id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $(document).find('#delete_from_'+data_id).submit();
            }
        })
    });
}); 
</script>
@endsection
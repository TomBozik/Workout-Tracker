@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

            <div class="d-flex justify-content-between row">
                <h3>Edit Routine</h3>

                <form id="delete_from_{{$routine->id}}" method="POST" action="{{ route('routines.destroy', $routine->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <a href="javascript:void(0);" data-id="{{$routine->id}}" class="_delete_data">
                            <span class="btn btn-danger">Remove Routine</span>
                        </a>                    
                    </div>
                </form>

            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12 px-4">

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
                    <strong>{{ $cat }}: </strong><br>
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
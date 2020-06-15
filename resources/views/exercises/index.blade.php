@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>Exercises</h1>
            </div>

                @foreach($exercises as $cat => $exercises_list)
                    <button class="btn btn-outline-primary mb-2 btn-block" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target=".{{ $cat }}" 
                        aria-expanded="false"
                    > 
                        {{ $cat }}
                    </button>
                        
                    <div class="row collapse {{ $cat }}">
                        @foreach ($exercises_list as $exercise)

                            <div class="col-md-4 col-sm-6 mb-2">
                                <div class="card card-body text-center h-100 d-flex flex-column" >
                                    <img class="card-img-top" src="/storage/{{$exercise->image_thumbnail}}"> 
                                    <div class="card-title pt-2"> <strong> {{ $exercise->name }} </strong></div>
                                    <p class="card-text">{{ $cat }}</p>

                                    @role('admin') 
                                    <a href="{{ route('exercises.edit', $exercise->id) }}" class="btn btn-outline-primary btn-block mt-auto">Edit</a>
                                    @endrole
                                </div>
                            </div>  
                            
                        @endforeach
                    </div>
                @endforeach

                @role('admin')
                <div class="row justify-content-end"> 
                    <div class="col-12 text-right">
                        <a href="{{ route('exercises.create') }}" class="btn btn-outline-success">New Exercise</a> 
                    </div>
                </div>
                @endrole

        </div>
    </div>
</div>
@endsection


@section('script')
<script type="text/javascript">
$(document).ready(function(){
    // bind a click-handler to the 'tr' elements with the 'header' class-name:
    $('tr.header').click(function(){
        /* get all the subsequent 'tr' elements until the next 'tr.header',
        set the 'display' property to 'none' (if they're visible), to 'table-row'
        if they're not: */
        $(this).nextUntil('tr.header').css('display', function(i,v){
            return this.style.display === 'table-row' ? 'none' : 'table-row';
        });
    });
}); 
</script>
@endsection
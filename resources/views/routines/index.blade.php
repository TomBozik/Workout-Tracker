@extends('layouts.app')

@section('styles')
{{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>My Routines</h1>
            </div>

            @foreach($routines as $routine)
                <div class="row">
                    <div class="col col-md-12 d-flex justify-content-center justify-content-md-start">
                        <h4><a href="{{ route('routines.edit', $routine->id) }}" class="pl-3 text-dark"> {{ $routine->name }} </a></h4>
                    </div>
                </div>

                @foreach($routine->exercises as $cat => $exercises_list)
                    <button class="btn btn-outline-primary mb-2 btn-block" 
                        type="button" 
                        data-toggle="collapse" 
                        data-target=".{{ $cat }}-{{ $routine->id }}" 
                        aria-expanded="false"
                    > 
                        {{ $cat }}
                    </button>

                    <div class="row">
                        @foreach ($exercises_list as $exercise)
                            <div class="col-md-4 col-sm-6">
                                <div class="collapse {{ $cat }}-{{ $routine->id }}">
                                    <div class="card text-center mb-2">
                                        @if($exercise->image)
                                            <img class="card-img-top" src="/storage/{{$exercise->image_thumbnail}}">
                                        @endif
                                        <div class="card-block">
                                            <h4 class="card-title pt-2">{{ $exercise->name }}</h4>
                                            <p class="card-text">{{ $cat }} <br> {{ $routine->name }}</p>
                                            <a href="{{ route('sets.create', $exercise->id) }}" class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        @endforeach
                    </div>
                @endforeach

            @endforeach

            <div class="row justify-content-end"> 
                <div class="col-12 text-right">
                    {{-- <button type="button" class="btn btn-outline-success">Success</button> --}}
                    <a href="{{ route('routines.create') }}" class="btn btn-outline-success">New Routine</a> 
                </div>
            </div>

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
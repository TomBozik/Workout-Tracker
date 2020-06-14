@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>My Routines</h1>
            </div>

            <th><a href="{{ route('routines.create') }}">New Routine</a></th>

            <table class="table">

                @foreach($routines as $routine)

                    <tr style="background-color: rgb(32, 214, 41)">
                        <th>{{ $routine->name }} </th>
                        <th class="text-right"><a href="{{ route('routines.edit', $routine->id) }}" class="pl-3">Edit</a>
                        </th>
                    </tr>

                    @foreach($routine->exercises as $cat => $exercises_list)

                        <tr style="background-color: #F7F7F7" class="header" style="display: table-row;">
                            <td colspan="2" style="cursor: pointer;"><strong>{{ $cat }} exercises</strong></td>
                        </tr>

                        @foreach ($exercises_list as $exercise)
                            <tr style="display:none;">
                                @if($exercise->image_thumbnail)
                                    <td> <img src="/storage/{{$exercise->image_thumbnail}}"> <a href="{{ route('sets.create', $exercise->id) }}">{{ $exercise->name }}</a></td>
                                @else
                                    <td colspan="2"><a href="{{ route('sets.create', $exercise->id) }}">{{ $exercise->name }}</a> </td>
                                @endif 
                            </tr>
                        @endforeach

                    @endforeach

                @endforeach
            </table>

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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <div class="d-flex justify-content-center">
                <h1>Exercises</h1>
            </div>

            <table class="table">

                @foreach($exercises as $cat => $exercises_list)
                


                    <tr style="background-color: #F7F7F7" class="header" style="display: table-row;">
                        <td colspan="2" style="cursor: pointer;"><strong>{{ $cat }} exercises</strong></td>
                        <td class="text-right">Action</td>
                    </tr>

                    @foreach ($exercises_list as $exercise)
                        <tr style="display:none;">
                        
                            @if($exercise->image_thumbnail)
                                <td> <img src="/storage/{{$exercise->image_thumbnail}}"> {{ $exercise->name }}</td>
                            @else
                                <td>{{ $exercise->name }} </td>
                            @endif 

                            @role('admin')
                                <td class="text-right"><a href="{{ route('exercises.edit', $exercise->id) }}">Edit</a></td>
                            @else
                                <td class="text-right">-</td>
                            @endrole
                        </tr>
                    @endforeach

                @endforeach

                @role('admin')
                <tr><a href="{{ route('exercises.create') }}">New Exercise</a></tr>
                @endrole

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
@extends('layouts.app')

@section('content')
<div class="container">
    <create-set :data="{{ $previousSets }}" :exercise="{{ $exercise }}"></create-set>
</div>
@endsection

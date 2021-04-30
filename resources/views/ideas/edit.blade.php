@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/ideas/'.$idea->id) }}" method="post">
@csrf
{{ method_field('PATCH')}};
@include('ideas.form');

</form>
</div>
@endsection
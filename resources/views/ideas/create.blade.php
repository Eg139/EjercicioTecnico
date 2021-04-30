@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('ideas')}}" method="post">
@csrf
@include('ideas.form')


</form>
</div>
@endsection
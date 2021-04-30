@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-6"><h1>My Ideas</h1></div>
<div class="col-lg-2"><a href="{{ url('ideas/create') }}" class="btn btn-success">+</a></div>
</div>
<hr>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th></th>
            <th>Impact</th>
            <th>Ease</th>
            <th>Confidence</th>
            <th>Avg.</th>

            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($ideas as $idea)
        <tr>
            <td>{{$idea->Text}}</td>
            <td>{{$idea->Impact}}</td>
            <td>{{$idea->Ease}}</td>
            <td>{{$idea->Confidence}}</td>
            <td>{{$idea->Avg}}</td>
            <td>
            <a href="{{ url('/ideas/'.$idea->id.'/edit')}}" class="btn btn-warning">Editar</a>
            | 
            <form action="{{ url('/ideas/'.$idea->id) }}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form></td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
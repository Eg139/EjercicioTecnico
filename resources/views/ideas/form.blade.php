@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
     @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
   
</div>


@endif
<div class="form-group">
<label for="Text">Idea</label>
<input type="text" class="form-control" name="Text" value="{{isset($idea->Text)?$idea->Text:''}}" id="Text">
</div>

<div class="form-group">
<label for="Impact">Impact</label>
<input type="number" class="form-control" name="Impact" value="{{isset($idea->Impact)?$idea->Impact:''}}" id="Impact">

</div>

<div class="form-group">
<label for="Ease">Ease</label>
<input type="number" class="form-control" name="Ease" value="{{isset($idea->Ease)?$idea->Impact:''}}" id="Impact">

</div>

<div class="form-group">
<label for="Confidence">Confidence</label>
<input type="number" class="form-control" name="Confidence" value="{{isset($idea->Confidence)?$idea->Confidence:''}}" id="Confidence">

</div>

<div class="form-group">
<label for="Avg">Avg.</label>
<input type="number" class="form-control" name="Avg" value="{{isset($idea->Avg)?$idea->Avg:''}}" id="Avg">
</div>


<input class="btn btn-success" type="submit" class="form-control" value="Enviar">

<a class="btn btn-primary" href="{{ url('ideas') }}">Regresar</a>










<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
{{ Form::label($data['lable'], $data['name']) }} 

<div class="checkbox">
@foreach($data['data'] as $value=>$lable)
<label tabindex="{{$index}}">
	{{Form::checkbox($data['name']."[]", $value)}}
    {{$lable}}
  </label>
@endforeach
</div>
</div>

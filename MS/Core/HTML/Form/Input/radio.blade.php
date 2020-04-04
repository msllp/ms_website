<?php
//dd($data);
 ?>
<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
{{ Form::label($data['lable'], $data['name']) }} 

<div class="radio">
<?php //dd($data['data']); ?>


@foreach($data['data'] as $value=>$lable)
<label tabindex="{{$index}}">
	@if ($value == $data['value'])
	{{Form::radio($data['name'], $value,['class'=>'form-control',"checked"=>"checked"])}}
    {{$lable}}
	@else
    {{Form::radio($data['name'], $value,['class'=>'form-control',])}}
    {{$lable}}
	@endif
	
  	
  </label>
@endforeach

</div>
</div>


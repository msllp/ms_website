<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
<fieldset disabled>
{{ Form::label($data['lable'], $data['name']) }} 
{{Form::select($data['name'], $data['data'],null,['class'=>'form-control'])}}
</fieldset>
@foreach ( $data['data'] as  $value => $lable )
{{Form::hidden($data['name']."[]", $value)}}
@endforeach


</div>


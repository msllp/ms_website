<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
{{ Form::label($data['lable'], $data['name']) }} 
{{Form::select($data['name'], $data['data'],null,['class'=>'form-control'])}}
</div>


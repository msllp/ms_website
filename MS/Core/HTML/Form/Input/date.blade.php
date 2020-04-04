<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
    {{ Form::label($data['name'], $data['lable']) }}
    {{ Form::date($data['name'], $data['value'],['class'=>'form-control','tabindex'=>$index,'placeholder'=>'Enter '.$data['lable']] ) }}
</div>
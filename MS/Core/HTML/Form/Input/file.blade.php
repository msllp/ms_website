<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">

<?php 
	
//dd(url(\Storage::cloud()->url($data['value'])));
		
		if (array_key_exists('value', $data)) {
			//dd($data['value']);
			if($data['value']!=null){

				$data['value']=url(\Storage::cloud()->url($data['value']));
				echo "Uploaded File Path: ".$data['value'];
				$data['value']='';


			}
			

		}

			echo Form::label($data['name'], $data['lable']."*");
			echo Form::file($data['name'], $data['value'],['class'=>'form-control','tabindex'=>$index,] );
		
?>

<small class="text-danger ">
*=new file uploaded old, file will be deleted after adminstration permision.
</small>
    
</div> 
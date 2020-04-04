<?php

namespace B\Query;


use Illuminate\Http\Request;

class Controller extends \App\Http\Controllers\Controller
{


 public function __construct()
    {
       
        
        
    }

public function post( \Illuminate\Http\Request  $r ){
   // dd();

 //return redirect()->action('\MS\B\M\Query\Controller@add');
    $input=$r->all();
    //dd($input);
    $val=\Validator::make($input, [
'email'=>"required",
'contactno'=>"required",
'name'=>"required",
'query'=>"required",





        ]);

if ($val->fails()) {

  $status=500;
            $array=[
            'msg'=>$val->errors()
        
            ];
            $json=collect($array)->toJson();
            return response()->json($array, $status);

  }else{


        $model=new \B\Query\Model ()    ;
        $arrayFinal=[

        'uniqId'=> \B\Query\Base::genUniqID (),
        'Name'=>$input['name'],
        'Email'=>$input['email'],
        'ContactNo'=>$input['contactno'],
        'Query'=>$input['query'],
        'Replay'=>0,
        'ip'=>$_SERVER['REMOTE_ADDR'],
        'status'=>true,


        ];

        $model->MS_add($arrayFinal);

      $status=200;
            $array=[
            'msg'=>"We received your query",
        
            ];
            $json=collect($array)->toJson();
            return response()->json($array, $status);
  }

    



}

 public function index(){

 return redirect()->action('\MS\B\M\Query\Controller@add');


}

public function add(){
	$formData=Base::genFormData();

    $form=\MS\Core\DForm::display($formData);

       $btn=[
	    [
	    'icon'=>'fa fa-arrow-left',
	    'text'=>'Back',
	    'action'=>'\BECM\Announcements\Data\Controller@edit',
	    ],

	     [
	    'icon'=>'fa fa-floppy-o',
	    'text'=>'Save',
	    ]
	    ,

    ];
    
    $data=[
    'form-icon'=>'fa fa-bullhorn',
    'frm-action'=>'\BECM\Announcements\Data\Controller@addPost',
    'form-title'=>'Add or Schedule New Announcements',
    'form-content'=>$form,
    'form-btn'=>$btn,
    'breacrumb'=>[
    		

    				[
    			'icon'=>'fa fa-bullhorn',
    			'text' =>'Announcements',
    			'actionlink' =>'\BECM\Announcements\Data\Controller@edit',],
    				

    				[
    				'icon'=>'fa fa-plus-square',
    			'text' =>'Add',
    				],
    				
    				],

    ];
    return view('app.layouts.B.form')->with('data',$data);

}

}
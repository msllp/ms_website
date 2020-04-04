<?php 
namespace MS\Core\Helper;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282');
class Comman {


	public static function loadBack(){
		require_once(base_path('MS'.DIRECTORY_SEPARATOR .'B'.DIRECTORY_SEPARATOR .'M'.DIRECTORY_SEPARATOR ."Routes.php"));
	}

	public static function loadFront(){
		require_once(base_path('MS'.DIRECTORY_SEPARATOR .'F'.DIRECTORY_SEPARATOR .'M'.DIRECTORY_SEPARATOR ."Routes.php"));
	}

	public static function loadRoute($module,$backend=true){
		if ($backend) {
			require_once(base_path('MS'.DIRECTORY_SEPARATOR .'B'.DIRECTORY_SEPARATOR .'M'.DIRECTORY_SEPARATOR .ucfirst($module).DIRECTORY_SEPARATOR."Routes.php"));
		}else{
			require_once(base_path('MS'.DIRECTORY_SEPARATOR .'F'.DIRECTORY_SEPARATOR .'M'.DIRECTORY_SEPARATOR .ucfirst($module).DIRECTORY_SEPARATOR."Routes.php"));
		}
	}


	public static function random($count,$type='1'){
	$randstring=[];
    switch ($type) {
    	case '1':
    		$characters = '0123456789';
    		break;

    	case '2':
    		$characters = 'abcdefghijklmnopqrstuvwxyz';
    		break;

    	case '3':
    		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		break;

    	case '4':
    		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		break;


    	case '5':
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		break;
    	
    	default:
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		break;
    }
    

    for ($i = 0; $i <= $count; $i++) {
        $randstring[]= $characters[rand(0, strlen($characters)-1)];
    }
    return implode('', $randstring) ;
}

	// Encrypt Function
	public static function en($encrypt, $key=ENCRYPTION_KEY){
	    $encrypt = serialize($encrypt);
	    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
	    $key = pack('H*', $key);
	    $mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
	    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt.$mac, MCRYPT_MODE_CBC, $iv);
	    $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
	    return $encoded;
	}
	// Decrypt Function
	public static function de($decrypt, $key=ENCRYPTION_KEY){
	    $decrypt = explode('|', $decrypt.'|');
	    $decoded = base64_decode($decrypt[0]);
	    $iv = base64_decode($decrypt[1]);
	    if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
	    $key = pack('H*', $key);
	    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
	    $mac = substr($decrypted, -64);
	    $decrypted = substr($decrypted, 0, -64);
	    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
	    if($calcmac!==$mac){ return false; }
	    $decrypted = unserialize($decrypted);
	    return $decrypted;
	}


    public static function makeColumn($table,$name,$type="string",$default=""){
         
         switch ($type) {
            case 'boolean':
               $table->boolean($name)->default(false);
               break;
            
            default:
               if($default !=""){
                  $table->string($name);
               }else{
                  $table->string($name);
               }               
               break;
         }
         
      }

    public static function makeTable($name,$array,$connection=""){
            if($connection!=""){
               Schema::connection($connection)->create($name, function (Blueprint $table)use ($array)  {
                $table->increments('id');
             foreach ($array as $value) {
                     
                     self::makeColumn($table,$value['name'],$value['type']);

                  }           
                  $table->timestamps();
              }); 
            }else
            {
                  Schema::create($name, function (Blueprint $table) use ($array) {
                    $table->increments('id');
             foreach ($array as $value) {
                     
                     self::makeColumn($table,$value['name'],$value['type']);

                  }           
                  $table->timestamps();
              }); 
            }

            

      }

    public static function deleteTable($name,$connection=""){
       //   dd($name);
          if ($connection != "") {
          Schema::connection($connection)->drop($name);
          }else{
          Schema::drop($name);  
          }
          
      }


    public static function getYr(){return date('Y');}

    public static function getMon(){return date('m');}

    public static function getDay(){return date('d');}
    public static function getCDate(){return date("Y-m-d");}
    public static function getFDate($day=0){return date("Y-m-d",strtotime(date("Y-m-d")." +".$day." days"));}



    public static function loadModV($moduleCode,$file){

    }


	public static function loadModuleRoute($baseClass){
		
			$cl=$baseClass."\\"."Base";		
			$data=$cl::$routes;

			foreach ($data as $value) {
			if(!array_key_exists('type', $value))
			{

			}else{
				//$value['route']=strtolower($value['route']);
				switch ($value['type']) {
					case 'get':
						\Route::get($value['route'],$cl::$controller."@".$value['method']);
						break;

					case 'post':
						\Route::post($value['route'],$cl::$controller."@".$value['method']);
						break;

					case 'put':
						\Route::put($value['route'],$cl::$controller."@".$value['method']);
						break;

					case 'delete':
						\Route::delete($value['route'],$cl::$controller."@".$value['method']);
						break;
					
					default:
						# code...
						break;
				}
	}
		

		
	}

	}

	public static function findDuplicate($class,$cloumn,$value){


			$row=$class->where($cloumn,$value)->get()->toArray();
			//dd($row);
			//dd();

			if(collect($row)->isNotEmpty()){
				return ['error'=>true,'msg'=>"Duplicate Found"];
			}

			return ['error'=>false,'msg'=>"Duplicate Not Found"];

	}


	public static function exportCandidate($model,$post){

	$data=[

			'UniqId',
			'Post',
			'NamePrefix',
			'NameFirst',
			'NameFather',
			'NameLast',
			'FatherPrefix',
			'FatherFull',
			'PDDOB',
			'PDPNumber',
			'PDMNumber',
			'PDSex',
			'PDMS',
			'PDCaste',
			'PDEmail',
			'PDAddress',
			'PDLandmark',
			'PDCity',
			'PDPincode',
			'Degree',
			'DegreeData',
			'JobExp',
			'JobExpData',
			'Doc',
			'DocPath',
			'Status',


				];




	\Excel::create($post, function($excel)use($post) {

    // Set the title
    $excel->setTitle($post);

    // Chain the setters
    $excel->setCreator('MSL')
          ->setCompany('MSL');

    // Call them separately
    $excel->setDescription('A demonstration to change the file properties');


     $excel->sheet('2017', function($sheet)use($post) {


	//$sheet->protect('admin');

	$data=[

	
			'Registration No.',
			'Post',
			'Name',
			'Gender',
			'City',
			'SSC',
			'HSC',
			'Graduate',
			'Post Graduate',
			'Job Experience',
			'Mobile No.'
			



				];

		$model=new \B\Form\Model ();	
		//dd($model->get()->toArray());
		$data2=\MS\Core\Helper\Comman::filterDuplicateCandidate($model,$post);
     	$sheet->row(1, $data);
     	$count=2;
     	//dd(count($data));

     	foreach ($data2 as $value) {
     		$degreeData=json_decode($value['DegreeData'],true);
     		//dd($degreeData);

     		if(count($degreeData)>0){


     		foreach ($degreeData as  $key=>$value2) {
     				//dd($value2);
     				if(array_key_exists('deg', $value2)){
     					
     					switch ($value2['deg']) {
     						case 'ssc':
     							if(array_key_exists('mark', $value2)){
     								$ssc=$value2['mark'];
     							}else{

     							}
     							break;

     						case 'hsc':
     							if(array_key_exists('mark', $value2)){
     								$hsc=$value2['mark'];
     							}else{

     							}
     							break;

     						case 'graduate':
     							if(array_key_exists('mark', $value2)){
     								$btech=$value2['mark'];
     							}else{

     							}
     							break;

     						case 'postgraduate':
     							if(array_key_exists('mark', $value2)){
     								$mtech=$value2['mark'];
     							}else{

     							}
     							break;
     						
     						default:
     							# code...
     							break;
     					}

     				}

     		}	
     		if(!isset($ssc))$ssc=0;
     		if(!isset($hsc))$hsc=0;
     		if(!isset($btech))$btech=0;
     		if(!isset($mtech))$mtech=0;
     		}else{

     			$ssc=0;
     			$hsc=0;
     			$btech=0;
     			$mtech=0;
     		}
     		

     		$row=[
     		'Registration No.'=>$value['UniqId'],
     		'Post'=>$value['Post'],
     		'Name'=>$value['NameFirst']." ".$value['NameFather']." ".$value['NameLast'],
     		'Gender'=>$value['PDSex'],
     		'City'=>$value['PDCity'],
     		'SSC'=>$ssc,
			'HSC'=>$hsc,
			'Graduate'=>$btech,
			'Post Graduate'=>$mtech,
     		'Job Experience'=>$value['JobExp'],
     		'Mobile No.'=>$value['PDMNumber'],

     		];

     		$unset=[
     		'id','updated_at','created_at','Status',
     		];
     		foreach ($unset as  $value2) {
     			unset($value[$value2]);
     		}

     		$sheet->row($count, $row);
     		$count++;
     	}

    //  	for ($i=0; $i < count($data)+1 ; $i++) { 
    //  		$unset=[
    //  		'id','updated_at','created_at','Status',
    //  		];
    //  		foreach ($unset as  $value) {
    //  			unset($data2[$i][$value]);
    //  		}
 			// $sheet->row($count, $data2[$i]);
    //  		$count++;
    //  	}

    });	


})->download('xlsx');



	}


	public static function filterDuplicateCandidate($model,$post){

			$ups=$model->where('Post',$post)->get();

			$demoArray=[];

			$upsArray= $ups->groupBy(function ($item, $key) use (&$demoArray) {

			    $name=ucfirst(strtolower($item['NameFirst']))." ".ucfirst(strtolower($item['NameFather']))." ".ucfirst(strtolower($item['NameLast']));

			     if(array_key_exists($name, $demoArray)){

			        $demoArray[$name][]=$item['UniqId'];
			      //  var_dump($name);
			        //var_dump("<br>");
			    }else{
			        $demoArray[$name][]=$item['UniqId'];
			    }
			    return $item['UniqId'];
			});



			//var_dump() ;
			//dd($upsArray);
			//dd($demoArray);

			$finalArray=[];

			foreach ($demoArray as $key => $value) {
			   if (count($value)>1) {
			        
			        $duplicate=[];
			        foreach ($value as $key2 => $value2) {


			           $duplicate[$value2]= $upsArray[$value2]->first()->toArray();

			           $duplicate[$value2]["JobExpDataPoint"]=count(json_decode($duplicate[$value2]["JobExpData"],true));
			           $degreData=json_decode($duplicate[$value2]["DegreeData"],true);
			            $duplicate[$value2]["DegreeDataPoint"]=0;
			            //var_dump(count($degreData));
			            if(count($degreData) > 0){
			            
			                 foreach ($degreData as $key3 => $value3) {

			                   // var_dump($degreData);
			             if($value3['mark']!=null)$duplicate[$value2]["DegreeDataPoint"]++;
			           }
			            }

			            $duplicate[$value2]["Rank"]=$duplicate[$value2]["JobExpDataPoint"]+$duplicate[$value2]["DegreeDataPoint"];

			            $duplicate[$value2]=collect($duplicate[$value2]);
			          
			        }


			        $finalArray[]=collect($duplicate)->sortByDesc('Rank')->first()->toArray();

			        //dd($finalArray);

			       }else{
			        $finalArray[]=$upsArray[$value[0]]->first()->toArray();

			       }


			}





			return $finalArray;

	}



}
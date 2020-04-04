<?php

namespace MS\Core\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;


class MS_Mod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ms:mod {type : The Type of Module }{name : Name of Module }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New Module';
    protected $type;
    protected $name;
    public $INtype,$INname;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
      
        

        
        $this->setType($this->argument('type') );

       
    }



    public function setType($type){

        $typeMaster=['b','f'];
        $INtype=strtolower($type);

        if(!(in_array($INtype, $typeMaster))){

            $INtype=$this->ask('Please Enter Valid Module Type');
            

        if(!(in_array($INtype, $typeMaster))){

            $this->info('Please Try again.');
        		

            	
        }else{

            $this->INtype=$INtype;
        }
            
            
        }else{
        	$this->INtype=$INtype;
        }


        //dd($this->INtype);

        if($this->INtype != null and $this->INtype != ""  ){
            		
        	
			$this->makeModule($this->INtype,$this->argument('name'));

            		


        }else{
            $this->info("Please Try Again");
        }


        

       

    }	


    public function makeModule($type,$name){
    	$type= strtoupper($type);
    	$name= ucfirst($name);

    	$directory='MS/'. $type.'/M/'.$name;
    	$Masterdirectory='MS/Core/Templates/ModuleCode';
        $namespace='B\\'.$name;

    	$dv=[
    	'{namespace}'=> $namespace,
        '{ModuleCode}'=>$name,
    	];

        $routechange='MS'.DIRECTORY_SEPARATOR. $type.DIRECTORY_SEPARATOR.'M'.DIRECTORY_SEPARATOR.'Routes.php';
        $text="\MS\Core\Helper\Comman::loadRoute('".$dv['{ModuleCode}']."');";
        
    	//$this->putDVin($dv,$Masterdirectory.'/Base.php');
        Storage::makeDirectory('MS/'. $type.'/M/'.$name.'V');
        Storage::disk('MS-DOMS-MASTER-CORE')->put($directory.'/Base.php',$this->putDVin($dv,$Masterdirectory.'/Base.php'));
        Storage::disk('MS-DOMS-MASTER-CORE')->put( $directory.'/Controller.php',$this->putDVin($dv,$Masterdirectory.'/Controller.php'));
        Storage::disk('MS-DOMS-MASTER-CORE')->put($directory.'/Model.php',$this->putDVin($dv,$Masterdirectory.'/Model.php'));
        Storage::disk('MS-DOMS-MASTER-CORE')->put($directory.'/Routes.php',$this->putDVin($dv,$Masterdirectory.'/Routes.php'));
        Storage::disk('MS-DOMS-MASTER-CORE')->append($routechange, $text);
    }

    public function putDVin($dv,$file)
    {
    	//dd($file);
    	$file=file_get_contents(base_path($file));

    	foreach ($dv as $key => $value) {
    		$file=str_replace($key, $value,$file);
    	}

    	return $file;
    	//str_replace("%body%", "black", "<body text='%body%'>");
    	//dd($file);

    }

}

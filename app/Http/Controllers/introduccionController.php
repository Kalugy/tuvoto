<?php

namespace App\Http\Controllers;
use App\Inicio;
use App\Candidato;
use App\Propuesta;
use Illuminate\Http\Request;

class introduccionController extends Controller
{
    
   
    public $miarray = [];

    	public function estees()
    {
        return $this->miarray;
    }


    

    public function introduccion() {
		
		
		
		
		// con esto muestro los datos que se actulicen en la base de datos en introduccion
    	$varinicio = Inicio::all();
    	$varcandidato = Candidato::all();
    	$varpropuesta = Propuesta::all();

    	

    	$varkey=Propuesta::get(['key']);	
		$this->miarray = json_decode( json_encode( $varkey ), true );
		// $this->miarray[0]="hola";
		// $this->miarray[1]="hola2";
		shuffle($this->miarray);
		 // $this->data[$key] 
		// var_dump ($this->miarray);

		// $esteesmiarray=array();
		$estoesunarray=introduccionController::estees();
		// var_dump ($estoesunarray);
		// $user = (object)$array1;

		// echo $user;
		// var_dump ($array1);
		// foreach ($miarray as $v) {
		//     echo "Valor actual de \$a: $v.\n";
		// }

        
		$json_string = json_encode($estoesunarray);
		$file = 'vector.json';
		file_put_contents($file, $json_string);
		$num=0;
		$json_string = json_encode($num);
        $file = 'num.json';
        file_put_contents($file, $json_string);


		return view('introduccion',compact('varinicio','varcandidato','estoesunarray','num'));

	}

	public function get($key)
    {
        return isset($this->miarray[$key]) ? $this->miarray[$key] : null;
    }
	// public function getarray(){

	// 	foreach ($miarray as $v) {
	// 	    echo "Valor actual de \$a: $v.\n";
	// 	}
	// 	return $miarray;

	// }
	public function show($id)
    {
        
        

        
        // $varpropuesta=Propuesta::where('key',$id)->first();

        // foreach ($arrayName as $v) {
        //     echo "Valor actual de \$a: $v.\n";
        // }
        // echo $id;
    	var_dump ($this->miarray);
        // $estoesunarray1=introduccionController::estees();
        //  var_dump ($estoesunarray1);
        //  echo "string";

        // return view('ventanas.show', compact('varpropuesta'));

    }
		
	
}

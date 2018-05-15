<?php

namespace App\Http\Controllers;
use App\Propuesta;
use App\Candidato;
use App\introduccionController;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VentanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        //saco todas mis keys.. c
        $varkey=Propuesta::get(['key']);
        //cuantas hay?
        $numerodekeys=count($varkey);


        //para crear el archivo de num y vectorde keys ademas de la key siguiente
        $varpropuesta=Propuesta::where('key',$id)->first();
        $datos_vector = file_get_contents("vector.json");
        $json_numerosaleatorios = json_decode($datos_vector, true);


        $num = file_get_contents("num.json");
        $numero2 = json_decode($num, true);

        $numero2 += 1; 
        $json_string = json_encode($numero2);
        $file = 'num.json';
        file_put_contents($file, $json_string);

        // var_dump($json_numerosaleatorios);

        //ahora si solo hay una propuesta miestra la vista con boton fin si no muestra con show normal
        if($numerodekeys == 1){
            return view('ventanas.show2', compact('varpropuesta','numerodekeys'));
        }    
        else{
        return view('ventanas.show', compact('varpropuesta','json_numerosaleatorios','numero2'));}


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



    public function sacarcandidatos(){

        

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //saco todas mis keys.. c
        $varkey=Propuesta::get(['key']);
        //cuantas hay?
        $numerodekeys=count($varkey);
        $numerodekeys1=$numerodekeys-1;

        $num = file_get_contents("num.json");
        $numero = json_decode($num, true);
 
        
        // Primer caso donde muestra las propuestas
        if($numero < $numerodekeys1){


        //saber que propuestas sigue y guardar en archivo
        $varpropuesta=Propuesta::where('key',$id)->first();
        $datos_vector = file_get_contents("vector.json");
        $json_numerosaleatorios = json_decode($datos_vector, true);


        $numero2 =$numero+1;
        $json_string = json_encode($numero2);
        $file = 'num.json';
        file_put_contents($file, $json_string);

        // var_dump($json_numerosaleatorios);

        
        
        $numero3=$numero-1;


        // actualizamos con la key que nos llegue
        Propuesta::where('key',$json_numerosaleatorios[$numero3])->update([
            
            
            
            "valor"=> $request->input('onoffswitch1'),
            
            "updated_at"=> Carbon::now(),
        ]);    

        return view('ventanas.show', compact('varpropuesta','json_numerosaleatorios','numero2'));


        }

        //segundo caso donde si llego a la ultima propuesta    
        elseif($numero == $numerodekeys1){

            //saber que propuestas sigue y guardar en archivo
        $varpropuesta=Propuesta::where('key',$id)->first();
        $datos_vector = file_get_contents("vector.json");
        $json_numerosaleatorios = json_decode($datos_vector, true);


        $numero2 =$numero+1;
        $json_string = json_encode($numero2);
        $file = 'num.json';
        file_put_contents($file, $json_string);

        // var_dump($json_numerosaleatorios);

        
        
        $numero3=$numero-1;


        // actualizamos con la key que nos llegue
        Propuesta::where('key',$json_numerosaleatorios[$numero3])->update([
            
            
            
            "valor"=> $request->input('onoffswitch1'),
            
            "updated_at"=> Carbon::now(),
        ]);    



        return view('ventanas.show2', compact('varpropuesta','numerodekeys'));
        }

        elseif($numero > $numerodekeys1){


        $datos_vector = file_get_contents("vector.json");
        $json_numerosaleatorios = json_decode($datos_vector, true);    

        $numero2 =$numero+1;
        $json_string = json_encode($numero2);
        $file = 'num.json';
        file_put_contents($file, $json_string);

        // var_dump($json_numerosaleatorios);

        
        
        $numero3=$numero-1;


        // actualizamos con la key que nos llegue
        Propuesta::where('key',$json_numerosaleatorios[$numero3])->update([
            
            
            
            "valor"=> $request->input('onoffswitch1'),
            
            "updated_at"=> Carbon::now(),
        ]);    

            // $valores=Propuesta::get(['valor']);
            // $varpropuesta2 = Propuesta::all();
           
            // return view('fin', compact('varpropuesta2'));

        
        $varpropuesta2 = Propuesta::all();
        $varcandidato2 = Candidato::all();
        //saco todas mis keys de candidatos
        $varcand=Candidato::get(['id']);
        //cuantas hay?
        $numerodecandidatos=count($varcand);
        

        
        // $arrayName = array('num' =>  );;
        $array = array();
        $array3 = array();
        $array2 = array();
        

        //array para sacar la respuestas del usuario y guardarlo en vector

        foreach ($varcandidato2 as $can){
            $contador=0;
          
            foreach ($varpropuesta2 as $propu) {
                
                if($propu->id==$can->propuesta_id){

                    if(is_null($propu->valor))
                        {}
                    else{
                        $contador=$contador+$propu->valor; 
                    }
                }
            }
            //arrau con las propuestas que quiere
            array_push($array, $contador);
            //de que candidato son las propuestas
            array_push($array3, $can->id);
           
        }

        // print_r($array);
        // print_r($array3);

        //array para sacar la cantiad de propuesta que tiene un candidato
         foreach ($varcandidato2 as $can){
            $contador=0;
          
            foreach ($varpropuesta2 as $propu) {
                
                if($propu->id==$can->propuesta_id){

                    
                    $contador=$contador+1; 
                    
                }
            }
            array_push($array2, $contador);
        }

        // print_r($array2);

        //sacar porcentajes

        $porcentaje = array();
        
        $num=0;
        foreach ($array as $k) {
            
               

            $porcentajes1=(($k *100)/ $array2[$num] ) ;
            
            
            array_push($porcentaje, $porcentajes1);
            $num=$num+1;
        }

        //creo un array con la key de candidato y si porcentaje

        $porcan = array();
        $porcan[$array3[0]] = $porcentaje[0];
        $porcan[$array3[1]] = $porcentaje[1];
        
        //con esto lo mezclo de mayor a menos sin perder las keys
        arsort($porcan);
        

        // esto es para sacar las dos primeras keys  
        $datocero=0; 
        foreach ($porcan as $key => $value) {
            
            if ($datocero==0) {
            $mykey = $key;
            $datocero=$datocero+1;
               }
            elseif ($datocero==1 ) {
            $mykey2 = $key;
            $datocero=$datocero+1;
            }
        }   
           
        // echo $mykey;
        // echo $mykey2;

        //esto es para sacar los dos primeros porcentajes  
        $datocero=0;
        foreach ($porcan as $ke) {
            if ($datocero==0) {
                
                $porcen1=$ke;
                
                $datocero=$datocero+1;
            }
            elseif ($datocero==1 ) {
                
                $porcen2=$ke;
                
                $datocero=$datocero+1;
            }
           
        }  

        // echo $porcen1;
        // echo $porcen2;
        
        //ahora saco el candidato
        $primercan=Candidato::findOrfail($mykey);
        $segundocan=Candidato::findOrfail($mykey2);

        // echo $primercan;
        // echo $segundocan;
        //sacar los dos mejores con su candidato respectivo
        // rsort($porcentaje);
        // print_r($porcentaje);

        return view('fin',compact('primercan','segundocan'));

        }
        


    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    



}

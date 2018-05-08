<?php

namespace App\Http\Controllers;
use App\Propuesta;
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

        // if($numero = "6"){
        //     return view('fin');
        // }    
        // else{
        return view('ventanas.show', compact('varpropuesta','json_numerosaleatorios','numero2'));

        
        // foreach ($json_numerosaleatorios as $num) {
            
        //     echo $num;
        // }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        $num = file_get_contents("num.json");
        $numero = json_decode($num, true);

         
        // //redireccionamos
        if($numero <= 4){


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
        elseif($numero ==5){

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



        return view('ventanas.show2', compact('varpropuesta'));
        }

        elseif($id == 7){


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

            return view('fin');
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

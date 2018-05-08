<?php

namespace App\Http\Controllers;
use App\Propuesta;
use App\introduccionController;
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
        $numero = json_decode($num, true);

        $numero += 1; 
        $json_string = json_encode($numero);
        $file = 'num.json';
        file_put_contents($file, $json_string);

        // var_dump($json_numerosaleatorios);

        // if($numero = "6"){
        //     return view('fin');
        // }    
        // else{
        return view('ventanas.show', compact('varpropuesta','json_numerosaleatorios','numero'));

        
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
        //
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

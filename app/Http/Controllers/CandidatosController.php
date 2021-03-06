<?php

namespace App\Http\Controllers;
use App\Candidato;
use App\Propuesta;
use Illuminate\Http\Request;

use DB;

use Storage;
class CandidatosController extends Controller
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
        return view('candidatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Candidato::create($request->all());

        $candidato = new Candidato();

        $candidato->candidato= $request->candidato;
        $candidato->partido= $request->partido;
        $candidato->perfil= $request->perfil;
        $candidato->nombreprograma= $request->nombreprograma;

        //para guardar imagen
        $img = $request->file('urlImg');

        //time por si el nombre se repite

        if(is_null($img)){}
        else    
        {$file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imgcandidatos')->put($file_route,file_get_contents($img->getRealPath()));
        $candidato->imagen= $file_route;
        }

        
        
        $candidato->save();

        //direccionar
        return redirect()->route('inicios.index')->with('info','hemos recibido el candidato');
        
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //miramos a ver si el valor de id esta en la tabla
        $varcandidato=Candidato::findOrfail($id);
        
        // redireccionamos
        return view('candidatos.edit',compact('varcandidato'));

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
        // actuzalismo los datos en la tabla con el siguiente linea
        // $varcandidato=Candidato::findOrfail($id)->update($request->all());
        
         $candidato = Candidato::findOrfail($id);

         // echo $candidato;
         // echo "hola";

        
        $candidato->candidato= $request->candidato;
        $candidato->partido= $request->partido;
        $candidato->perfil= $request->perfil;
        $candidato->nombreprograma= $request->nombreprograma;

        //para guardar imagen
        $img = $request->file('urlImg');

        //time por si el nombre se repite
        if(is_null($img)){}
        else{    
        $file_route = time().'_'.$img->getClientOriginalName();

        Storage::disk('imgcandidatos')->put($file_route,file_get_contents($img->getRealPath()));
        $candidato->imagen= $file_route;
        }

        if (is_null($request->img)) {
            
        }else{
        Storage::disk('imgcandidatos')->delete($request->img);
        }
        
        $candidato->save();

     

        // //redireccionamos
        return redirect()->route('inicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // OJO si borra un candidato se borra TODAS sus propuestas
        $varcandidato = Candidato::findOrfail($id);
        
        
        Storage::disk('imgcandidatos')->delete($varcandidato->imagen);
        Candidato::destroy($id); 
        // mira si el candidato tiene propuesta para eliminar
        // si se pone find or fail saca error cuando no hay datos en la tabla propuestas
        $varpropuesta=Propuesta::find($id);


        //si tiene propuestas borremelas si no redireccioneme a index
        if(is_null($varpropuesta)){
            return redirect()->route('inicios.index');
        }
        else{
            $varpropuesta=Propuesta::findOrfail($id)->delete();
            return redirect()->route('inicios.index');}
        }
}

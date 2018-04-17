<?php

namespace App\Http\Controllers;
use App\Candidato;
use App\Propuesta;
use Illuminate\Http\Request;

use DB;


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
        Candidato::create($request->all());


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
        
        $varcandidato=Candidato::findOrfail($id);
        

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
        $varcandidato=Candidato::findOrfail($id)->update($request->all());
        

        //redireccionamos
       
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
        $varcandidato=Candidato::findOrfail($id)->delete();

        
        $varpropuesta=Propuesta::find($id);

         // return redirect()->route('inicios.index');
        
        if(is_null($varpropuesta)){
            return redirect()->route('inicios.index');
        }
        else{
            $varpropuesta=Propuesta::findOrfail($id)->delete();
            return redirect()->route('inicios.index');}
      
        
    }
}

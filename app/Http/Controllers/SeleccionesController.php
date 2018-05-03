<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Propuesta;
use App\Candidato;
use Illuminate\Http\Request;

class PropuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //para mostrar la tabla peo todo lo hace inicios.index
        $varpropuesta = Propuesta::all();
        //{{dd($varpropuesta);}}
        return view('selecciones.index', compact('varpropuesta'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        // mostrar propuestas individualmente 
        $varpropuesta=Propuesta::where('key',$key)->first();
        // propuesta siguiente
        $next= Propuesta::where('key', '>',$varpropuesta->key)->min('key');
        //{{dd($varpropuesta);}}
        if(!is_null($varpropuesta))
            return view('selecciones.show', compact('varpropuesta'))-> with('next',$next);
        else
            return 'esto no sirve';
       
    }

   
}

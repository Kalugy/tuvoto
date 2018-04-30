<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Propuesta;


use Illuminate\Http\Request;

class SeleccionesController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        // nunca se utiliza pero la coloque por si las moscas
        //$varpropuesta=Propuesta::find($key);
        $varkey=Propuesta::find($id);
        $varpropuesta=Propuesta::where('key',$id)->first();
        // propuesta siguiente
        $next= Propuesta::where('key', '>',$varpropuesta->key)->min('key');
        // return Propuesta::where('key',$this->propuesta_id)->get();

        //{{dd($varpropuesta);}}
        if(!is_null($varpropuesta))
            return view('selecciones.show', compact('varpropuesta','varkey'))-> with('next',$next);
        else
            return 'esto no sirve';
       
    }

    
    
}

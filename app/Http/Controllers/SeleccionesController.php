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
        //$varpropuesta=Propuesta::find($key);
        $varkey=Propuesta::find($id);
        $varpropuesta=Propuesta::where('key',$id)->first();
        // propuesta siguiente
        $next= Propuesta::where('key', '>',$varpropuesta->key)->min('key');
        //{{dd($varpropuesta);}}
        if(!is_null($varpropuesta))
            return view('selecciones.show', compact('varpropuesta','varkey'))-> with('next',$next);
        else
            return 'esto no sirve';
    }

public function store(Request $request)
    {
        // miramos el valor de la propuesta que queremos guardar
        $val=$request->get('valorpropuesta');
        
        // esto es para guardar la prpuesta en la tabla propuesta con el id (llave foranea) y la propuesta
        $flight = new Propuesta;
        $flight->id = $can;
        $flight->valorpropuesta = $val;
        $flight->save();
        // Nota: el save guarda los timestamps guarda ya actualiza el tiempo

        //direccionar
        

    }
    public function update(Request $request, $key){
        // actualizamos con la key que nos llegue
        Propuesta::where('key',$key)->update([
            
            "valorpropuesta"=> $request->input('valorpropuesta'),
            "updated_at"=> Carbon::now(),
        ]);

        //redireccionamos
        return redirect()->route('inicios.index');
    }
    
    
}

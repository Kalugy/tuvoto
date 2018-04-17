<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inicio;
use App\Candidato;
use App\Propuesta;

class IniciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varinicio = Inicio::all();
        $varcandidato = Candidato::all();
        $varpropuesta = Propuesta::all();
        // enviamos todos los datos para mostrar las tablas en inicios.index
        return view('inicios.index',compact('varinicio','varcandidato','varpropuesta'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // redireccionamos
        return view('inicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inicio::create($request->all());

        //direccionar
        return redirect()->route('inicios.index')->with('info','hemos recibido el mensaje');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        // el unico caso que pude utilizar findorfail por que la llave primaria era id
        // en los otros casos no pude por que se llamaban diferentes
        $varinicio=Inicio::findOrfail($id);
        return view('inicios.edit',compact('varinicio'));
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
        // find or fail encuentra el di en la tabla o me vota a la vista error
        $varinicio=Inicio::findOrfail($id)->update($request->all());
        
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
        $varinicio=Inicio::findOrfail($id)->delete();
        //redireccionar
        return redirect()->route('inicios.index');
    }
}

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
        // View::share('varinicio');
        // return view('introduccion',compact('varinicio'));

        return view('inicios.index',compact('varinicio','varcandidato','varpropuesta'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $varinicio=Inicio::findOrfail($id)->update($request->all());
        
        //return Redirect()->route('introduccion', $varinicio);
        // return view('introduccion')->with('varinicio',$varinicio);
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

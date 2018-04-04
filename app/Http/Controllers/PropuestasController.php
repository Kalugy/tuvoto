<?php

namespace App\Http\Controllers;
use App\Propuesta;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Propuesta::create($request->all());

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
        // $varpropuesta=Propuesta::findOrfail($id);
        // $varpropuesta = DB::table('messages')->where('idpropuesta',$id)->first();
        // return $id;
        $varpropuesta=$id;
        return view('propuestas.show',compact('varpropuesta'));
       



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $varpropuesta=Propuesta::findOrfail($id);
        return view('propuestas.edit',compact('varpropuesta'));
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
        $varpropuesta=Propuesta::findOrfail($id)->update($request->all());
        
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
        $varpropuesta=Propuesta::findOrfail($id)->delete();
        //redireccionar
        return redirect()->route('inicios.index');
    }
}

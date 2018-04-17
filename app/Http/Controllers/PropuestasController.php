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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // creamos
        $candidatos= Candidato::all();
        // redireccionamos
        return view('propuestas.create', compact('candidatos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // que guarde el id en candidatos en su tabla
        $can=$request->get('candidato');
        // miramos la propuesta que queremos guardar
        $Pro=$request->get('descripcionpropuesta'); 
        // guardamos la propuesta del candidato "la llave foranea"
        Candidato::where('id', $can)->update(['propuesta_id' => $can]);
        
        // esto es para guardar la prpuesta en la tabla propuesta con el id (llave foranea) y la propuesta
        $flight = new Propuesta;
        $flight->id = $can;
        $flight->descripcionpropuesta = $Pro;
        $flight->save();
        // Nota: el save guarda los timestamps guarda ya actualiza el tiempo

        //direccionar
        return redirect()->route('inicios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // nunca se utiliza pero la coloque por si las moscas
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
        //buscamos el valor a editar
        $varpropuesta=Propuesta::where('key',$id)->first();
        //reireccionamos        
        return view('propuestas.edit',compact('varpropuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key)
    {
        
        // actualizamos con la key que nos llegue
        Propuesta::where('key',$key)->update([
            
            "descripcionpropuesta"=> $request->input('descripcionpropuesta'),
            "updated_at"=> Carbon::now(),
        ]);

        //redireccionamos
        return redirect()->route('inicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        // donde vea la key borreme toda la columnda y sus datos sin respaldo
        $varpropuesta=Propuesta::where('key',$key)->delete();
       
        //redireccionar
        return redirect()->route('inicios.index');
    }
}

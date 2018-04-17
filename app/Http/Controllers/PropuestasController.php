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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidatos= Candidato::all();
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
        
        $can=$request->get('candidato');
        $Pro=$request->get('descripcionpropuesta'); 

        Candidato::where('id', $can)->update(['propuesta_id' => $can]);
   
        $flight = new Propuesta;

        $flight->id = $can;
        $flight->descripcionpropuesta = $Pro;
        $flight->save();


        //direccionar
        return redirect()->route('inicios.index');

        /*$varcan= \App\Candidato::get();
        
        //     \App\Candidato::findOrFail('key','propuesta_id')
        
        foreach ($varcan as $var) {
            
            if($request->key == $var->propuesta_id ){
                Propuesta::create($request->all());
                //direccionar
                return redirect()->route('inicios.index');
            }
        }*/

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
        $varpropuesta=Propuesta::where('key',$id)->first();

       
        

        
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
        

        Propuesta::where('key',$key)->update([
            
            "descripcionpropuesta"=> $request->input('descripcionpropuesta'),
            "updated_at"=> Carbon::now(),
        ]);

        // $varpropuesta=Propuesta::where('key',$key)->update($request->all);
        
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
    public function destroy($key)
    {
        
        $varpropuesta=Propuesta::where('key',$key)->delete();
       
        //redireccionar
        return redirect()->route('inicios.index');
    }
}

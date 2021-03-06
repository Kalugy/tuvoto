<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    

    function __construct(){

        //para que no entren con /url desde inicio
        $this->middleware('auth',['except'=>['create','store']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        //$messages = DB::table('messages') ->get();   

        $messages = Message::all();


        return view('messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        Message::create($request->all());

        //direccionar
        return redirect()->route('mensajes.create')->with('info','hemos recibido el mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$mensaje = DB::table('messages')->where('id',$id)->first();

        $mensaje=Message::findOrfail($id);
        return view('messages.show',compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //$mensaje = DB::table('messages')->where('id',$id)->first();

        $mensaje=Message::findOrfail($id);
        return view('messages.edit',compact('mensaje'));
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
        
        $mensaje=Message::findOrfail($id)->update($request->all());

        //redireccionamos
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $mensaje=Message::findOrfail($id)->delete();
        //redireccionar
        return redirect()->route('mensajes.index');
    }
}

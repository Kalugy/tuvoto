<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{

	protected $request;
	 public function __construct(Request $request) {
		$this->request = $request;
	}

	//esto es para crear controlador de vistas
    public function home() {
		return view('home');
	}


	public function contact() {
		return view('contacto');
	}

	public function mensajes() {
		//return $this->request->all();
		if($request->has('nombre'))
		{
			return "si tiene nombre";
		}
		return "no tiene nombre";
	}



	public function salud($nombre='invitado') {
		$html="<h2>hey what's up</h2>";
		$consolas=[
		"Wii",
		"aaa",
		"wiiyou"
		];

		return view ('saludo',compact('nombre','html','consolas'));
	}
}

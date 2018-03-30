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
    public function introduccion() {
		return view('introduccion');

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

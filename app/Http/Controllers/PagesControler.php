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

		// return response ('contenido de respuesta',201)
		// 								->header('X-TOKEN','secret')
		// 								->header('X-TOKEN-2','secret-2')
		// 								->header('X-COOKIE','cookie');

	}


	public function contact() {
		return view('contacto');
	}

	public function mensajes() {
		//$data= $this->request->all();

		//return response()->json(['data'=>$data],202)->header('X-TOKEN','secret');

		/*if($this->request->has('nombre'))
		{
			return "si tiene nombre";
		}
		return "no tiene nombre";*/


		//return redirect('/');//para ir a una pagina luego de enviar

		// return redirect()
		// 	->route('contacto')
		// 	->with('info','tu mensaje ha sido enviado correctamente');

		return back()
			>with('info','tu mensaje ha sido enviado correctamente');
			//regresa a la pagina anterior

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

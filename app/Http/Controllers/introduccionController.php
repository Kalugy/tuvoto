<?php

namespace App\Http\Controllers;
use App\Inicio;
use App\Candidato;
use Illuminate\Http\Request;

class introduccionController extends Controller
{
    public function introduccion() {
		
		// con esto muestro los datos que se actulicen en la base de datos en introduccion
    	$varinicio = Inicio::all();
    	$varcandidato = Candidato::all();
		return view('introduccion',compact('varinicio','varcandidato'));

	}
}

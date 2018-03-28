<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',['as'=>'home', function () {
	return view('home');
}]);

//para cambiar el nombre de la URL mas rapido
Route::get('contactanos', ['as'=>'contactos', function () {
	return view('contacto');
}]);
//para enviar por url un parametro
Route::get('saludos/{nombre?}',['as'=>'saludos', function ($nombre="invitado") {

	// return view('saludo',['nombre' => $nombre ]) 
	// return view('saludo')=>with(['nombre' => $nombre ]);
	return view ('saludo',compact('nombre'));
}])->where('nombre',"[A-Za-z]+") ;

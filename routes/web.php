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


Route::get('/',['as'=>'home', 'uses'=>'PagesControler@home']);

Route::get('contactanos',['as'=>'contactos', 'uses'=>'PagesControler@contact']);


Route::post('contacto', 'PagesControler@mensajes');

Route::get('saludos/{nombre?}',['as'=>'saludos', 'uses'=>'PagesControler@salud'])->where('nombre',"[A-Za-z]+") ;

//para cambiar el nombre de la URL mas rapido
/*Route::get('contactanos', ['as'=>'contactos', function () {
	return view('contacto');
}]);*/




//para enviar por url un parametro
/*Route::get('saludos/{nombre?}',['as'=>'saludos', function ($nombre="invitado") {

	// return view('saludo',['nombre' => $nombre ]) 
	// return view('saludo')=>with(['nombre' => $nombre ]);
	$html="<h2>hey what's up</h2>";

	$consolas=[
		"Wii",
		"aaa",
		"wiiyou"
	];

	return view ('saludo',compact('nombre','html','consolas'));


}])->where('nombre',"[A-Za-z]+") ;*/

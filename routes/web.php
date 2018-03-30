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


Route::get('/',['as'=>'introduccion', 'uses'=>'PagesControler@introduccion']);
Route::get('saludos/{nombre?}',['as'=>'saludos', 'uses'=>'PagesControler@salud'])->where('nombre',"[A-Za-z]+") ;

// //Route::get('login',['as'=>'contactos', 'uses'=>'PagesControler@contact']);
// //Route::get('login', 'Auth\LoginController@ShowLoginForm');


// //Route::get('contactanos',['as'=>'contactos', 'uses'=>'PagesControler@contact']);


Route::post('contacto', 'PagesControler@mensajes');

Route::resource('mensajes','MessagesController');
//bases de datos
// 


// Route::get('mensajes', ['as' =>'messages.index','uses'=>'MessagesController@index']);
// Route::get('mensajes/create', ['as' =>'messages.create','uses'=>'MessagesController@create']);
// Route::post('mensajes', ['as' =>'messages.store','uses'=>'MessagesController@store']);

// Route::get('mensajes/{id}', ['as' =>'messages.show','uses'=>'MessagesController@show']);
// Route::get('mensajes/{id}/edit', ['as' =>'messages.edit','uses'=>'MessagesController@edit']);

// Route::put('mensajes/{id}', ['as' =>'messages.update','uses'=>'MessagesController@update']);

// Route::delete('mensajes/{id}', ['as' =>'messages.destroy','uses'=>'MessagesController@destroy']);





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

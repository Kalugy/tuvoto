<?php

//agregar un admin manual aunque ya estan los seeders
//  Route::get('test',function(){

// 	$user=new App\User;
// 	$user->name='daniel';
// 	$user->password=bcrypt('123');
// 	$user->save();
// 	return $user;

// });


//ver todas las propuestas
// Route::get('propu',function(){
// 	return \App\Propuesta::with('candidato')->get();
// });

//la ruta para la ventana de home
Route::get('/',['as'=>'introduccion', 'uses'=>'introduccionController@introduccion']);
Route::get('/introduccion/{key}',['as'=>'introduccion.show', 'uses'=>'introduccionController@show']);
//rutas predetermiandas por laravel para utilziar la base de datos
//resource tiene muchas rutas para verlas es con php artisan r:l
Route::resource('inicios','IniciosController');
Route::resource('candidatos','CandidatosController');
Route::resource('propuestas','PropuestasController');
Route::resource('ventanas','VentanasController');
// route::get('/ventanas/{{ventana}}', 'VentanasController');

//rutas para el login
Route::get('login','Auth\LoginController@showLoginForm') -> name('login');
Route::post('login','Auth\LoginController@login');
//ruta para cuando se salga
Route::get('logout','Auth\LoginController@logout');

//ruta para mostrar propuestas
Route::get('/selecciones', 'SeleccionesController@index'); 
Route::post('/selecciones', 'SeleccionesController@index');
route::get('/selecciones/{key}', 'SeleccionesController@show')->where(['key' => '[0-9]+']);
route::post('/selecciones/{key}', 'SeleccionesController@show')->where(['key' => '[0-9]+']);


Route::get('/muestras/[{cadena}]',['as'=>'muestra', 'uses'=>'introduccionController@muestra']);
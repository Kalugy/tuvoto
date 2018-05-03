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

//rutas predetermiandas por laravel para utilziar la base de datos
//resource tiene muchas rutas para verlas es con php artisan r:l
Route::resource('inicios','IniciosController');
Route::resource('candidatos','CandidatosController');
Route::resource('propuestas','PropuestasController');

//rutas para el login
Route::get('login','Auth\LoginController@showLoginForm') -> name('login');
Route::post('login','Auth\LoginController@login');
//ruta para cuando se salga
Route::get('logout','Auth\LoginController@logout');

//ruta para mostrar propuestas
Route::get('/selecciones', 'PropuestasController@index'); 
Route::post('/selecciones', 'PropuestasController@index');
route::get('/selecciones/{key}', 'PropuestasController@show')->where(['key' => '[0-9]+']);
route::post('/selecciones/{key}', 'PropuestasController@show')->where(['key' => '[0-9]+']);
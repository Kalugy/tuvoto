<?php

//agregar un admin manual
 Route::get('test',function(){

	$user=new App\User;
	$user->name='daniel';
	$user->password=bcrypt('123');
	$user->save();
	return $user;

});


//ver todas las propuestas
Route::get('propu',function(){
	return \App\Propuesta::with('candidato')->get();
});

Route::get('/',['as'=>'introduccion', 'uses'=>'introduccionController@introduccion']);

// Route::get('saludos/{nombre?}',['as'=>'saludos', 'uses'=>'PagesControler@salud'])->where('nombre',"[A-Za-z]+") ;


Route::resource('mensajes','MessagesController');

Route::resource('inicios','IniciosController');
Route::resource('candidatos','CandidatosController');
Route::resource('propuestas','PropuestasController');

Route::get('login','Auth\LoginController@showLoginForm') -> name('login');;
Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');
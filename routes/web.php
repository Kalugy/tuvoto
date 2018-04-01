<?php

//agregar un admin manual
// Route::get('test',function(){

// 	$user=new App\User;
// 	$user->name='daniel';
// 	$user->password=bcrypt('123');
// 	$user->save();
// 	return $user;

// });



Route::get('/',['as'=>'introduccion', 'uses'=>'PagesControler@introduccion']);

Route::get('saludos/{nombre?}',['as'=>'saludos', 'uses'=>'PagesControler@salud'])->where('nombre',"[A-Za-z]+") ;


Route::resource('mensajes','MessagesController');

Route::resource('inicios','IniciosController');


// Route::get('/administrador', function()
// {
//     return view('administrador');
// });
// Route::get('mensajes', ['as' =>'messages.index','uses'=>'MessagesController@index']);
//Route::get('administrador', ['as'->'inicio.index'],'InicioController');


Route::get('login','Auth\LoginController@showLoginForm') -> name('login');;
Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');
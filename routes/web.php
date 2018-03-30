<?php

//agregar un admin manual
// Route::get('test',function(){

// 	$user=new App\User;
// 	$user->name='d';
// 	$user->password=('d');
// 	$user->save();
// 	return $user;

// });



Route::get('/',['as'=>'introduccion', 'uses'=>'PagesControler@introduccion']);

Route::get('saludos/{nombre?}',['as'=>'saludos', 'uses'=>'PagesControler@salud'])->where('nombre',"[A-Za-z]+") ;


Route::resource('mensajes','MessagesController');


Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');
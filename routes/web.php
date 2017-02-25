<?php

// use App\Convocatoria;
Route::get('/', 'ConvocatoriasController@show');
Route::get('/convocatorias', 'ConvocatoriasController@index');
Route::get('/convocatorias/{convocatoria}', 'ConvocatoriasController@vista');
// Route::get('/registro/registro', 'RegistrosController@index');
Route::get('/registro', 'RegistrosController@index');
Route::post('/registro', 'RegistrosController@create');
// Route::get('/registro/{id}/editar', 'RegistrosController@edit');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/registro', function () {
//     //dd(request()->all());
//     return view('registro');	


// });

// Route::post('registro', function () {
//     //dd(request()->all());
//     return view('registro');	
// });
Auth::routes();

Route::get('/home', 'HomeController@index');

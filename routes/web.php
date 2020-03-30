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

/*Route::get('/principal', function () {
    return view('welcome');
});*/

//rutas para indexar en la pagina
Route::get('/Registro/login',"userController@login");
Route::get('/Registro/registrado',"userController@convocatoriaRegistrado");
Route::get('/Registro/sinregistro',"userController@convocatoriaSinRegistro");

Route::resource('Registro','userController');

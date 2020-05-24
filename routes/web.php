<?php

use Illuminate\Support\Facades\Route;

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

//Rutas del foro
Route::resource('foro','ForoController');
Route::get('/foro','ForoController@getIndex');  //Indice
Route::get('/foro/crearTema', 'ForoController@show')->middleware('auth');   //Crear un tema formulario
Route::post('/foro/crearTema', 'ForoController@postCrearTema')->middleware('auth'); //Crear un tema POST
Route::get('/foro/mostrar/{id}','ForoController@showTema'); //Get Tema con ID
Route::post('/foro/mostrar/{id}/crearRespuesta', 'ForoController@createRespuesta');   //Crear respuesta para 1 tema
Route::get('/foro/{id}/eliminarTema', 'ForoController@getDeleteTema');
Route::put('/foro/{id}/eliminarTema', 'ForoController@destroy');


//Usuario
Route::get('/foro/perfil/{id}', 'ForoController@getPerfil');   //Ruta para coger la view del eprfil del usuario
Route::get('/foro/perfil/{id}/edit', 'ForoController@getEditPerfil');    //Ruta para coger el formulario y cambiar los datos del perfil
//Route::get('/foro/perfil/{id}/edit/pass', '');
//Route::post('/foro/perfil/{id}/editP', 'ForoController@putEditPerfil');
Route::put('/foro/perfil/{id}/editP', 'ForoController@putEditPerfil');

//Respuestas
Route::put('/foro/mostrar/{id}/editarRespuesta', 'ForoController@putEditRespuesta');

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/', function () {
    return view('home.index');
});

/*Route::get('/foro', function () {
    return view('home.foro');
});*/

Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');

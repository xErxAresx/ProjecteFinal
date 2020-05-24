<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Temas API
Route::get('/temas', 'APITemaController@index');
Route::get('/temas/{id}', 'APITemaController@show');
Route::get('/temas/user/{id}', 'APITemaController@userTemas');

//Respuestas API
Route::get('/respuestas', 'APIRespuestaController@index');
Route::get('/respuestas/{id}', 'APIRespuestaController@show');
Route::get('/respuestas/user/{id}', 'APIRespuestaController@userRespuestas');


//Route::get('/foro')

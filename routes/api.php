<?php

use Illuminate\Http\Request;

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

Route::post('/categoria','CategoriaController@store');
Route::get('/categoria','CategoriaController@index');
Route::put('/categoria/{id}','CategoriaController@update');
Route::delete('/categoria/{id}','CategoriaController@destroy');

Route::post('/producto','ProductoController@store');
Route::get('/producto','ProductoController@index');
Route::put('/producto/{id}','ProductoController@update');
Route::delete('/producto/{id}','ProductoController@destroy');


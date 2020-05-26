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
Route::middleware('api')->post('/register' , 'APIControllers\AuthController@register');
Route::middleware('api')->post('/login' , 'APIControllers\AuthController@login');
Route::middleware('api')->post('/logout' , 'APIControllers\AuthController@logout');

Route::resource('mascotas', 'APIControllers\MascotasController', ['only' => [
    'index', 'store', 'show', 'update', 'destroy'
]]);
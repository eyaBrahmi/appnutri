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

//fiche

Route::get('/fiche','FicheController@index');
Route::post('/fiche/store','FicheController@store');
Route::get('/show/{id}','FicheController@show');
Route::get('/ficheedit/{id}','FicheController@edit');
Route::patch('/ficheupdate/{id}','FicheController@update');
Route::delete('/fichedelete/{id}','FicheController@destroy');


//aliments route
Route::get('/aliment','AlimentController@index');
Route::post('/aliment/store','AlimentController@store');
Route::get('/show/{id}','AlimentController@show');
Route::get('/alimentedit/{id}','AlimentController@edit');
Route::patch('/alimentupdate/{id}','AlimentController@update');
Route::delete('/alimentdelete/{id}','AlimentController@destroy');


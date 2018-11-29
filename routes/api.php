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

Route::post('/register','Auth\RegisterController@apiRegister');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route categoria
Route::middleware('auth:api')->get('/categorie','CategorieController@all');
Route::middleware('auth:api')->get('/categoria/{id}','CategorieController@find');
Route::middleware('auth:api')->put('/categoria','CategorieController@put');
Route::middleware('auth:api')->patch('/categoria/{id}','CategorieController@patch');
Route::middleware('auth:api')->delete('/categoria/{id}','CategorieController@delete');

//Route negozio
Route::middleware('auth:api')->get('/negozi','NegoziController@all');
Route::middleware('auth:api')->get('/negozi/{id}','NegoziController@find');
Route::middleware('auth:api')->put('/negozi','NegoziController@put');
Route::middleware('auth:api')->patch('/negozi/{id}','NegoziController@patch');
Route::middleware('auth:api')->delete('/negozi/{id}','NegoziController@delete');

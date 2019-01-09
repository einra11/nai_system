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

//List
Route::get('apimessages', 'ApiMessageController@index');
//List single
Route::get('apimessage/{id}', 'ApiMessageController@show');
//Create
Route::post('apimessage', 'ApiMessageController@store');
//Update
Route::put('apimessage', 'ApiMessageController@store');
//Delete
Route::delete('apimessage/{id}', 'ApiMessageController@destroy');

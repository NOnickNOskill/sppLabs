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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'user'], function () {
   Route::get('/{id}', 'UserController@index');
   Route::post('/', 'UserController@create');
});

Route::group(['prefix' => 'card'], function () {
    Route::get('/{id}', 'CardController@index');
    Route::post('/', 'CardController@store');
    Route::put('/{id}', 'CardController@update');
    Route::delete('/{id}', 'CardController@delete');
});

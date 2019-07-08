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


Route::get('/API/population', [
   'uses' => 'remotellyController@index',
   'as' => 'apiRegister'
]);


Route::post('/API/populations', [
   'uses' => 'remotellyController@register',
   'as' => 'apiRegister'
]);

Route::post('/API/login', [
   'uses' => 'remotellyController@Login',
   'as' => 'apiLogin'
]);


Route::post('/API/criminals', [
   'uses' => 'remotellyController@criminals',
   'as' => 'apiCriminals'
]);

Route::post('/API/getCriminals', [
   'uses' => 'remotellyController@getCriminal',
   'as' => 'apigetCriminal'
]);
Route::post('/API/history', [
   'uses' => 'remotellyController@history',
   'as' => 'history'
]);
Route::post('/API/telephone', [
   'uses' => 'remotellyController@telephone',
   'as' => 'telephone'
]);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

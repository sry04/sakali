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

Route::group(['middleware' => ['api']], function () {  
    Route::post('auth/signup', 'Api\Auth\AuthController@signup');
    Route::post('auth/signin', 'Api\Auth\AuthController@signin');
    
  Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/kategori', 'Api\KategoriController@index');  
    Route::get('/kategori/{id}', 'Api\KategoriController@show');  
    Route::post('/kategori/add', 'Api\KategoriController@store');  
    Route::put('/kategori/{id}', 'Api\KategoriController@update');  
    Route::delete('/kategori/{id}', 'Api\KategoriController@destroy');  
  });
});

// Route::group(['namespace' => 'Api'], function () {
//   Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
//     Route::post('login', 'AuthController@login');
//   });
// });

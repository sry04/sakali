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

    Route::get('/tipe', 'Api\TipeController@index');
    Route::get('/tipe/{id}', 'Api\TipeController@show');
    Route::post('/tipe/add', 'Api\TipeController@store');
    Route::put('/tipe/{id}', 'Api\TipeController@update');
    Route::delete('/tipe/{id}', 'Api\TipeController@destroy');

    Route::get('/spesifikasi', 'Api\SpesifikasiController@index');
    Route::get('/spesifikasi/{id}', 'Api\SpesifikasiController@show');
    Route::post('/spesifikasi/add', 'Api\SpesifikasiController@store');
    Route::put('/spesifikasi/{id}', 'Api\SpesifikasiController@update');
    Route::delete('/spesifikasi/{id}', 'Api\SpesifikasiController@destroy');
  });
});

// Route::group(['namespace' => 'Api'], function () {
//   Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
//     Route::post('login', 'AuthController@login');
//   });
// });

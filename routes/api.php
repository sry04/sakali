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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'Api\Auth\AuthController@login');
    Route::post('logout', 'Api\Auth\AuthController@logout');
    Route::post('refresh', 'Api\Auth\AuthController@refresh');
    Route::post('me', 'Api\Auth\AuthController@me');

});

Route::middleware('auth:api')->group(function () {
    Route::get('dashboard', function () {
        return response()->json(['data' => 'Test Data']);
    });

    Route::get('/spesifikasi', 'Api\SpesifikasiController@index');
    Route::get('/spesifikasi/{id}', 'Api\SpesifikasiController@show');
    Route::post('/spesifikasi/add', 'Api\SpesifikasiController@store');
    Route::put('/spesifikasi/{id}', 'Api\SpesifikasiController@update');
    Route::delete('/spesifikasi/{id}', 'Api\SpesifikasiController@destroy');

    Route::get('/tipe', 'Api\TipeController@index');
    Route::get('/tipe/{id}', 'Api\TipeController@show');
    Route::post('/tipe/add', 'Api\TipeController@store');
    Route::put('/tipe/{id}', 'Api\TipeController@update');
    Route::delete('/tipe/{id}', 'Api\TipeController@destroy');

    Route::get('/size', 'Api\SizeController@index');
    Route::get('/size/{id}', 'Api\SizeController@show');
    Route::post('/size/add', 'Api\SizeController@store');
    Route::put('/size/{id}', 'Api\SizeController@update');
    Route::delete('/size/{id}', 'Api\SizeController@destroy');

    Route::get('/warna', 'Api\ColourController@index');
    Route::get('/warna/{id}', 'Api\ColourController@show');
    Route::post('/warna/add', 'Api\ColourController@store');
    Route::put('/warna/{id}', 'Api\ColourController@update');
    Route::delete('/warna/{id}', 'Api\ColourController@destroy');
});

// Route::group(['middleware' => ['api']], function () {
//
//   Route::group(['middleware' => ['jwt.auth']], function () {
//     Route::get('/kategori', 'Api\KategoriController@index');
//     Route::get('/kategori/{id}', 'Api\KategoriController@show');
//     Route::post('/kategori/add', 'Api\KategoriController@store');
//     Route::put('/kategori/{id}', 'Api\KategoriController@update');
//     Route::delete('/kategori/{id}', 'Api\KategoriController@destroy');
//

//
//
//   });
// });

// Route::group(['namespace' => 'Api'], function () {
//   Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
//     Route::post('login', 'AuthController@login');
//   });
// });

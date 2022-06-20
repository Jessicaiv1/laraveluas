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

Route::get('/mahasiswa/all','MhsAPIController@all');
Route::post('/mahasiswa/create', 'MhsAPIController@create');

// Route::post('/mahasiswa/update', 'MhsAPIController@update');
Route::post('/mahasiswa/update/{id}', 'MhsAPIController@update');

Route::delete('/mahasiswa/delete/{id}','MhsAPIController@delete');

//DOSEN
Route::get('/dosen/all','DsnAPIController@all');
Route::post('/dosen/create', 'DsnAPIController@create');

// Route::post('/dosen/update', 'DsnAPIController@update');
Route::post('/dosen/update/{id}', 'DsnAPIController@update');

Route::delete('/dosen/delete/{id}','DsnAPIController@delete');
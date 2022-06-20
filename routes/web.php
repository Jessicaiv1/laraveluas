<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', 'MhsController@mhs');

Route::get('/mahasiswa/cari', 'MhsController@pencarian');

Route::get('/mahasiswa/formulirmhs', 'MhsController@formulirmhs');

Route::post('/mahasiswa/simpanmhs', 'MhsController@simpanmhs');

Route::get('/mahasiswa/editmhs/{id}', 'MhsController@editmhs');

Route::put('/mahasiswa/updatemhs/{id}', 'MhsController@updatemhs');

Route::get('/mahasiswa/deletemhs/{id}', 'MhsController@deletemhs');


Route::get('/user', 'UserController@user')->middleware('auth');
Route::get('/user/deleteuser', 'UserController@deleteuser');
Route::get('/user/formuliruser','UserController@formuliruser');
Route::post('/user/simpanuser','UserController@simpanuser'); // abis nambahin data
Route::get('/login','UserController@login'); // laman login
Route::post('/login/ceklogin','UserController@ceklogin');
Route::get('/dashboard','UserController@home');
Route::get('/logout','UserController@logout'); // ya logout

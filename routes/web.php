<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('noticias','newsController');

Route::resource('usuario','userController');

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/funcionario', function () {
    return view('admin.funcionario');
});
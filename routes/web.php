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
    return redirect()->route('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/funcionario/writing', function () {
    return view('admin.writing');
});
Route::get('/funcionario/reading', function () {
    return view('admin.reading');
});
Route::get('/funcionario/listening', function () {
    return view('admin.listening');
});
Route::get('/funcionario/grammar', function () {
    return view('admin.grammar');
});

Route::resource('noticias','newsController');

Route::resource('usuario','userController');

Route::resource('funcionario','FuncionarioController');

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/pruebafuncionario', function () {
    return view('admin.pruebafuncionario');
});
Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

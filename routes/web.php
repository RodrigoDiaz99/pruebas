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
    return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::get('/registro-paciente', function () {
    return view('registerp');
});

Route::get('/calendario-citas', function () {
    return view('citas');
});
Route::get('/calendario-analisis', function () {
    return view('citas');
});
Route::get('/apertura-expediente', function () {
    return view('newexp');
});
Route::get('/consulta-expediente', function () {
    return view('expediente');
});

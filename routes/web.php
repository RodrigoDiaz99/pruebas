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


Route::get('/pacientes', function () {
    return view('pacientes');
});

Route::resource('calendario-citas', 'agendaController');

Route::get('/calendario-analisis', function () {
    return view('citas');
});

Route::post('/calendario-citas', 'agendaController@store');

Route::resource('registro-paciente', 'pacientesController');

Route::resource('apertura-expediente', 'aperturaExpController');

Route::resource('lista-pacientes', 'detallesController');

Route::resource('consulta_expediente', 'detallesController');

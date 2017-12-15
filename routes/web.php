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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//CARTELERAS
Route::resource('cartelera','CarteleraController');
Route::get('cartelera/cambiaEstatus/{id}', 'CarteleraController@cambiaEstatus')->name('cartelera.cambiaEstatus');

//BOLSA DE TRABAJO
Route::resource('bolsadetrabajo','BolsadetrabajoController');
Route::get('bolsadetrabajo/cambiaEstatus/{id}', 'BolsadetrabajoController@cambiaEstatus')->name('bolsadetrabajo.cambiaEstatus');

//EVENTOS
Route::resource('calendario','CalendarioController');
Route::get('calendario/cambiaEstatus/{id}', 'CalendarioController@cambiaEstatus')->name('calendario.cambiaEstatus');



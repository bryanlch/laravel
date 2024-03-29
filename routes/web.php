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
Route::resource('almacen/categoria','CategoriaController');

Route::resource('almacen/articulo','ArticuloController');

Route::resource('compras/cliente','ClienteController');

Route::resource('ventas/provedor','ProvedorController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    // return view('welcome');
    return redirect('/home');
});
Route::view('/home', 'home.home');
Route::view('/kardex', 'kardex.kardex');
Route::view('/inventario', 'inventario.inventario');
Route::post('crearProducto', 'ProductoController@store');

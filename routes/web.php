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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nueva', 'BebidasController@create');
Route::post('/nueva_bebida', 'BebidasController@store');
Route::get('/nuevo', 'PlatosController@create');
Route::post('/nuevo_plato', 'PlatosController@store');
Route::post('pedidos', 'PedidosController@index');
Route::post('/nuevo_pedido', 'PedidosController@store');
Route::post('ver', 'PedidosController@pedidos');
Route::get('restaurantes', 'RestauranteController@index');
Route::get('register1', function () {
    return view('auth.registrar_restaurante');
});

Route::get('register_prueba', function () {
    return view('formulario_persona');
});

Route::get('empresa', function () {
    return view('empresa');
});

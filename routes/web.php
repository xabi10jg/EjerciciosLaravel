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
Route::get('Datos', function () {
    return view('Datos');
});
Route::get('Blog/{id}', function ($id) {
    return view('Blog',['id'=>$id]);
});
Route::get('Blogconnombre/{id}/{nombre}', function ($id, $nombre) {
    return view('Blogconnombre',['id'=>$id, 'nombre'=>$nombre]);
});
Route::get('saludo', 'SaludoController@Saludo');
Route::get('saludoconnombre/{nombre}', 'SaludoController@SaludoConNombre');
Route::get('saludoconnombreycolor/{nombre}/{color?}', 'SaludoController@SaludoConNombreYColor');

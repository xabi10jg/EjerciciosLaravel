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
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'));
Route::get('saludo', 'SaludoController@Saludo');
Route::get('saludoconnombre/{nombre}', 'SaludoController@SaludoConNombre');
Route::get('saludoconnombreycolor/{nombre}/{color?}', 'SaludoController@SaludoConNombreYColor');
Route::get('formulario', 'FormularioController@mostrarvista');
Route::get('formulario/get', 'FormularioController@recogerdatos')->name('storeform');
Route::get('formulario2', 'FormularioController@mostrarvista2');
Route::post('formulario2/post', 'FormularioController@recogerdatos2')->name('storeform2');
Route::get('formularioValidados', 'FormularioController@mostrarvistavalidada');
Route::get('formularioValidados/get', 'FormularioController@validardatos')->name('datosvalidados');
Route::get('formularioValidados2', 'FormularioController@mostrarvistavalidada2');
Route::get('formularioValidados2/get', 'FormularioController@validardatos')->name('datosvalidados2');
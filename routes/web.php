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
    return view('auth.login');
});
Route::resource('/Perfil', 'PerfilController');
Route::resource('/Soporte', 'SoporteController');

Route::resource('producto','ProductoController')->names('producto');
Route::resource('venta','VentaController')->names('venta')->middleware('auth');
Route::resource('categoria', 'CategoriaController')->names('categoria');
Auth::routes();

Route::view('/contact', 'contact')->name('contact');
Route::post('contact','MessageController@store');

Route::get('/redirect/{provider}','SocialController@redirect');
Route::get('/callback/{provider}','SocialController@callback');

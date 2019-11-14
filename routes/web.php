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
Route::resource('/Perfil', 'PerfilController');
Route::resource('/Soporte', 'SoporteController');
Route::resource('/Principal', 'ProductoController');

Route::get('/Principal','ProductoController@index')->name('producto');
Route::get('/Principal/create','ProductoController@create');
Route::post('/Principal','ProductoController@store')->name('Producto.store');


Route::get('/f','StorageController@index');
Route::post('f/create', 'StorageController@save');

Route::get('storage/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/f/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
      return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

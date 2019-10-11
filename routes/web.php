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

Route::get('/', 'HomeController')->name('home');
Route::get('/about','AboutController')->name('about');
Route::view('/login', 'Login')->name('login');
Route::get('/laboratorio','LaboratorioController@index')->name('laboratorio');
Route::get('/contacto','ContactoController@index')->name('cantacto');
Route::get('/registropublico','RegistroPublicoController@index')->name('registropublico');
Route::post('/registropublico', 'RegistroPublicoController@store')->name('registropublico');
//Route::post('/login', 'RegistroPublicoController@login')->name('logusuario');
Route::get('/registrolab','RegistroLabController@index')->name('registrolab');
Route::post('/registrolab','RegistroLabController@store')->name('registrolab');
//Route::post('/login','RegistroLabController@login')->name('loglab');
Route::get('/gestion','GestionController@index')->name('gestion');
// Route::view('/about', 'About')->name('about');


/*
Route::get('/', function () {
    return view('welcome');
});*/

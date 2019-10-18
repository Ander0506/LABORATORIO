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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController')->name('about');
Route::get('/', 'LoginController@index')->name('login');
Route::get('/laboratorio','LaboratorioController@index')->name('laboratorio');
Route::get('/contacto','ContactoController@index')->name('cantacto');
Route::get('/registropublico','RegistroPublicoController@index')->name('registropublico');
Route::get('/gestion/{id?}','GestionController@index')->name('gestion');
Route::get('/registrolab','RegistroLabController@index')->name('registrolab');
Route::get('/gestionusuario','GestionUsuarioController@index')->name('gestionusuario');
Route::get('/guia','GuiaController@index')->name('guia');
Route::get('/labanalisis','LabAnalisiscontroller@index')->name('labanalisis');
Route::get('/contratar','contratarcontroller@index')->name('contratar');

Route::post('/registrolab','RegistroLabController@store')->name('registrolab');
Route::post('/registropublico','RegistroPublicoController@store')->name('registropublico');
Route::post('/gestion/{key}','GestionController@update')->name('gestion');
Route::post('/login/{id?}', 'LoginController@login');
Route::post('/guia','GuiaController@store')->name('guia');
Route::post('/login/', 'LoginController@login');
Route::post('/labanalisis','LabAnalisisController@insert')->name('labanalisis');
Route::post('/labanalisis/{key}','LabAnalisisController@update')->name('labanalisisupdate');
Route::post('/contratar','ContratarController@index')->name('contratar');
//Route::post('/contratar','ContratarController@crear')->name('solicitaranalisis');
/*
Route::get('/', function () {
    return view('welcome');
});*/

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
Route::get('/about','AboutController');
Route::view('/login', 'Login')->name('login');
Route::get('/laboratorio','LaboratorioController@index');
Route::get('/contacto','ContactoController@index');
// Route::view('/about', 'About')->name('about');


/*
Route::get('/', function () {
    return view('welcome');
});*/

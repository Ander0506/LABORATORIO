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
Route::get('/','AboutController');
/*Route::view('/', 'Home')->name('home');
Route::view('/login', 'Login')->name('login');
Route::view('/about', 'About')->name('about');


Route::get('/', function () {
    return view('welcome');
});*/

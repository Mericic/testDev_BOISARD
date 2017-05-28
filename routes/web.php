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
Route::get('/', 'ProfileController@index'); //Redirigé vers le controlleur tout de même: pas de page d'accueil
Route::resource('profile', 'ProfileController');

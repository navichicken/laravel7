<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@acercade')->name('about');

Route::get('/planes', 'HomeController@planes')->name('planes');

Route::get('/biblioteca', 'HomeController@biblioteca')->name('biblioteca');

Route::get('/perfil', 'HomeController@perfil')->name('perfil');

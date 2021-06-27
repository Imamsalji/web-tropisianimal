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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'ViewController@index')->name('view');

Route::resource('profiles','ProfileController');
Route::resource('view','ViewController');
Route::resource('products','ProductController');
Route::resource('pictures','PictureController');
Route::resource('contacts','ContactController');
Route::get('cari','ProfileController@cari');

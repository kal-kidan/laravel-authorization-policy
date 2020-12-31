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

Route::get('/blogs','BlogController@index')->name('blogs');
Route::post('/blog','BlogController@store')->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

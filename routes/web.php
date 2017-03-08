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


Route::get('/', 'HomeController@index')->name('app.home');

Auth::routes();

/** Profile **/
Route::get('/{username}', 'HomeController@profile')->name('app.profile');
Route::get('/home', 'App\ProfileController@home')->name('app.profile.home');

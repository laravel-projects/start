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
Route::group(['prefix'=>'','as'=>'app.profile'],function(){
	Route::get('home', 'App\User\ProfileController@index')->name('.index');
	Route::group(['prefix'=>'settings','as'=>'.settings'],function(){
		Route::get('/', 'App\User\SettingsController@index');
		Route::get('/security', 'App\User\SettingsController@security')->name('.security');
	});
	Route::get('{username}', 'HomeController@profile');
});

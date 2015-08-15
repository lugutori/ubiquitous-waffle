<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get ('test', function(){
	return "SOMETHING SOMETHING DARK SIDE";
});

Route::get ('login', 'LoginController@login');
Route::get ('mobile', 'MobileController@forapp');

/*Route::get('option','OptionController@index');
Route::get('option/create','OptionController@create');
Route::get('option/{id}','OptionController@show');
Route::post('option','OptionController@store');*/
Route::resource('option','OptionController');

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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('user', 'UserController@index');
Route::get('user/{id}/modify', 'UserController@edit');
Route::resource('user', 'UserController');

Route::get('order', 'OrderController@index');
Route::resource('order', 'OrderController');

Route::get('product', 'ProductController@index');
Route::resource('product', 'ProductController');

Route::get('offer', 'OfferController@index');
Route::resource('offer', 'OfferController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

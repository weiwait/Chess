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

Route::get('/', 'IndexController@index');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('user', 'UserController@index');

Route::get('home', function () {
   echo true;
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('ready', 'ReadyController@ready');
Route::get('unset-ready/{id}', 'ReadyController@unsetReady');

Route::get('user-info', 'ReadyController@getUserInfo');

Route::get('win/{user_id}/{opponent_id}', 'ReadyController@win');


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index');
Route::get('/test', 'TestController@index');
Route::get('/login', 'AuthController@showLoginForm');
Route::post('/login', 'AuthController@login');

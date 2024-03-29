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

Route::get('/test', function() {
  return 'Secret';
})->middleware('role:admin');

Route::get('/dashboard', function() {
  return 'Dashboard';
});

// Authentication routes
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

//DVD creation routes
Route::get('/createDVD', 'Admin\DVDController@createDVD');
Route::get('/dvds', 'DVDController@index');

Route::get('/dvds/{id}', ['as' => 'dvds.show','uses' => function() {}]);
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
    return view('dashboard.pages.index');
});

Route::get('/transaction', function () {
    return view('dashboard.transaction.index');
});

Route::get('/transaction/create', function () {
    return view('dashboard.transaction.create');
});


// Authentication routes...
Route::get('/login', [
    'as'    => 'login',
    'uses'  => 'Auth\AuthController@getLogin'
]);

Route::post('/login',  [
    'as'    => 'login',
    'uses'  => 'Auth\AuthController@postLogin'
]);

Route::get('/logout',  [
    'as'    => 'logout',
    'uses'  => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('/register', [
    'as'    =>   'register',
    'uses'  =>   'Auth\AuthController@getRegister'
]);

Route::post('/register', [
    'as'    => 'register',
    'uses'  => 'Auth\AuthController@postRegister'
]);


// Dashboard Route Group
Route::get('/dashboard', [
    'as'    => 'dashboard',
    'uses'  => 'DashBoardController@index'
]);

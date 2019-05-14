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

Route::get('/', function () {
    return view('index');
});

Route::get('/search', function () {
    return view('search');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/in', function () {
    return view('login');
});

Route::get('/companies', 'CompaniesController@index');

Route::get('/terminals', 'TerminalsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('welcome');
});

Route::get('/lista-um', 'ListOneController@index')->name('list.one');
Route::get('/lista-dois', 'ListTwoController@index')->name('list.two');
Route::post('/lista-dois', 'ListTwoController@store')->name('list.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rooms', 'RoomController@index')
    ->name('rooms.index');

Route::get('/room/{room}', 'RoomController@book')
    ->name('rooms.book');

Route::post('/room', 'RoomController@store')
    ->name('rooms.store');

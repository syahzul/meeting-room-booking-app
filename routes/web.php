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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/room', 'RoomController@create')
        ->name('rooms.create');

    Route::post('/room', 'RoomController@store')
        ->name('rooms.store');

    Route::get('/room/book/{room}', 'RoomController@book')
        ->name('rooms.book');

    Route::get('/room/{room}', 'RoomController@edit')
        ->name('rooms.edit');

    Route::put('/room/{room}', 'RoomController@update')
        ->name('rooms.update');

    Route::delete('/room/{room}', 'RoomController@destroy')
        ->name('rooms.delete');

});

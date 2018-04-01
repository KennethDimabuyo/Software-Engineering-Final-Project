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

Route::get('/', [
	'uses' => 'ChiroController@getIndex',
	'as' => 'index'
]);
Route::get('/admin', [
	'uses' => 'ChiroController@getAdmin',
	'as' => 'admin'
]);
Route::get('/delete/{id}', [
	'uses' => 'ChiroController@getDelete',
	'as' => 'delete'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', [
	'uses' => 'AdminController@index',
	'as' => 'admin'
]);

Route::post('/reserving', 'ChiroController@postReservationDate');

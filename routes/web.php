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
	 return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient', 'PatientController@index')->name('patient');
Route::get('/lists', 'PatientController@lists')->name('lists');
Route::post('/patient/search', 'PatientController@search')->name('search');
Route::post('/patient/store', 'PatientController@store')->name('store');

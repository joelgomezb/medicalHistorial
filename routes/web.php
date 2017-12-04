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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/patient', 'PatientController@index')->name('patient')->middleware('auth');
Route::get('/lists', 'PatientController@lists')->name('lists')->middleware('auth');
Route::post('/patient/search', 'PatientController@search')->name('search')->middleware('auth');
Route::post('/patient/store', 'PatientController@store')->name('store')->middleware('auth');

Route::get('/patient/pdf/{id}', 'PatientController@pdf')->name('pdf')->middleware('auth');

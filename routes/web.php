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

Route::get('/', 'TrakController@index');
Route::get('traks/{trak}', 'TrakController@show');
// Route::get('traks/{trak}', 'TrakController@show')->middleware('can:update,trak');
Route::get('/create', 'TrakController@create')->middleware('auth');
Route::get('/kontaktai', function () {
    return view('kontaktai');
    });
Route::get('/cookierules', function () {
    return view('cookierules');
    });
Route::post('/store', 'TrakController@store')->middleware('auth');
Route::get('edit/{trak}', 'TrakController@edit')->middleware('auth');
Route::get('/edit/{trak}', 'TrakController@edit')->middleware('auth');
Route::patch('/update/{id}', 'TrakController@update')->middleware('auth');
Route::post('/updateimage/{id}', 'TrakController@updateimage')->middleware('auth');
Route::get('delete/{id}', 'TrakController@destroy')->middleware('auth');
Route::get('usertraks', 'TrakController@usertraks')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup', 'HomeController@index')->name('home');

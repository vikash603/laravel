<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'frontend\HomeController@index');
Route::get('/about', 'AboutController@about');
Route::get('/create', 'AboutController@create');
Route::post('/store', 'AboutController@store');
Route::get('/edit/{id}', 'AboutController@edit');
Route::post('/update', 'AboutController@update');
Route::get('/show/{id}', 'AboutController@show');
Route::get('/delete/{id}', 'AboutController@delete');





Route::get('/view/{country_id}', 'frontend\HomeController@view');
Route::get('/city/{country_id}', 'frontend\HomeController@city');
Route::get('/count', 'frontend\HomeController@count');
Route::get('/even', 'frontend\HomeController@even');
Route::get('/oud', 'frontend\HomeController@oud');
Route::get('/swap', 'frontend\HomeController@swap');
Route::get('/pelindrome', 'frontend\HomeController@pelindrome');
Route::get('/arraysum', 'frontend\HomeController@arraysum');
Route::get('/sumcombine', 'frontend\HomeController@sumcombine');
Route::get('/prime', 'frontend\HomeController@prime');
Route::get('/per', 'frontend\HomeController@per');
Route::get('/table', 'frontend\HomeController@table');
Route::get('/contact', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create');
Route::post('/contact/store', 'ContactController@store');
Route::get('/contact/edit/{id}', 'ContactController@edit');
Route::post('/contact/update', 'ContactController@update');
Route::get('/contact/delete/{id}', 'ContactController@delete');

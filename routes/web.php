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

Route::get('/welcome', 'parfumController@acceuil');
Route::get('/test', 'parfumController@test');

Route::get('/details/id={id}', 'parfumController@showDetails');
Route::get('/data',   'parfumController@addData');
Route::post('/welcome',   'parfumController@saveData');

Route::post('/search',   'parfumController@search');
Route::get('/layout/layout', 'parfumController@index');

Route::get('/womenParfum',   'parfumController@getWomen');
Route::get('/menParfum',   'parfumController@getMen');
Route::get('/promotion',   'parfumController@getPromotion');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

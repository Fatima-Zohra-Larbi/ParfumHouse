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
//dispalay all data in parfum table
Route::get('/welcome', 'parfumController@acceuil');
//get the number of items in the user's cart to display it in the header's cart
Route::get('/layouts.layout', 'ordersController@items')->name('items');
//get the number of items in the user's favorite page to display it in the header's cart
Route::get('/layouts.layout', 'favoriteController@items')->name('itemsf');

// get all the data of the user from the orders table
Route::get('/panier', 'parfumController@Panier');

// get the details data of the parfum selected by the user
Route::get('/details/id={id}', 'parfumController@showDetails')->name('details');
// go to the page of adding data
Route::get('/data',   'parfumController@addData');
// add data to parfum table
Route::post('/data',   'parfumController@saveData');

// get the reasult of the search
Route::post('/search',   'parfumController@search');
// get the reasult of the search
Route::post('/advancedSearch',   'parfumController@advancedSearch');

// get the data of women parfums
Route::get('/womenParfum',   'parfumController@getWomen');
// get the data of women parfums
Route::get('/menParfum',   'parfumController@getMen');
// get the data of promotion parfums
Route::get('/promotion',   'parfumController@getPromotion');

// go to the Shopping Cart of the user
Route::get('/panier/customer={id}',   'ordersController@Panier')->name('panier')->middleware(Auth::user());
//delete order from the shopping cart by the user
Route::get('/panier/id={id},customer={customer}',   'ordersController@DeleteOrder')->name('delete');
//save order from details page by the user
Route::post('/details/id={id}',   'ordersController@saveOrder')->name('order');

// go to the favorite products of the user
Route::get('/favorite',   'favoriteController@Fav')->name('favorite');

//delete order from the favorite products by the user
Route::get('/favorite/id={id}',   'favoriteController@DeleteFavorite')->name('deletefav');
//add favorite 
 Route::post('/addfav', 'favoriteController@store');

//delete order from the shopping cart by the user
Route::get('/favorite/id={id}',   'favoriteController@DeleteFavorite')->name('deletef');
//delete favorite from the welcome page by user
Route::post('/deletefav',   'favoriteController@DeleteFav');
//add panier from pages
Route::post('/addorder', 'ordersController@addOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

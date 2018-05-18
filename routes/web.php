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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/product/men', 'MenController');

Route::resource('/product/women', 'WomenController');

Route::resource('/product/boys', 'BoyController');

Route::resource('/product/girls', 'GirlController');


Route::get('/', function () {
    return view('index');
});


//  MEN ROUTE

Route::get('/men/products', [
    'uses' => 'FrontEndController@menIndex',
    'as' => 'men.index'
]);

Route::get('/men/product/{id}', [
    'uses' => 'FrontEndController@menProduct',
    'as' => 'men.single'
]);

// WOMEN ROUTE

Route::get('/women/products', [
    'uses' => 'FrontEndController@womenIndex',
    'as' => 'women.index'
]);

Route::get('/women/product/{id}', [
    'uses' => 'FrontEndController@womenProduct',
    'as' => 'women.single'
]);

// BOYS ROUTE

Route::get('/boys/products', [
    'uses' => 'FrontEndController@boysIndex',
    'as' => 'boys.index'
]);

Route::get('/boys/product/{id}', [
    'uses' => 'FrontEndController@boysProduct',
    'as' => 'boys.single'
]);

// GIRLS ROUTE

Route::get('/girls/products', [
    'uses' => 'FrontEndController@girlsIndex',
    'as' => 'girls.index'
]);

Route::get('/girls/product/{id}', [
    'uses' => 'FrontEndController@girlsProduct',
    'as' => 'girls.single'
]);


//Route::group(['prefix' => 'admin'], function(){
//
//    Route::resource('/products', 'ProductController');
//
//
//    Route::resource('/genders', 'GenderController');
//
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

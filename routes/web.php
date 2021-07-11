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
    return view('home');
});

Route::resource('single-property','ListingController');

//Route::get('/single-property', 'ListingController@index'); 

//Route::get('/single-property', 'ListingController@show')->name('single-property'); 

//Route::post('/single-property', 'ListingController@postTour')->name('single-property'); 

//Route::get('/home', 'ListingController@show')->name('home');
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


Route::get('/home', 'ListingController@index')->name('home');

Route::resource('single-property','ListingController');

Route::get('/listing', 'ListingController@all')->name('listing');

Route::get('/rentlisting', 'ListingController@rentlisting')->name('rentlisting');

Route::get('/selllisting', 'ListingController@selllisting')->name('selllisting');

Route::get('/houses-for-sell', 'ListingController@listinghousesell')->name('houses-for-sell');

Route::get('/apartment-for-sell', 'ListingController@listingapartmentsell')->name('apartment-for-sell');

Route::get('/houses-for-rent', 'ListingController@listinghouserent')->name('houses-for-rent');

Route::get('/apartment-for-rent', 'ListingController@listingapartmentrent')->name('apartment-for-rent');

Route::get('/checkout', 'ListingController@getCheckout')->name('checkout')->middleware('auth'); 

Route::post('/checkout', 'ListingController@postCheckout')->name('checkout'); 

Route::get('/ordercomplete', 'ListingController@postCheckout')->name('ordercomplete'); 

Route::get('/all-apartments', 'ListingController@listingallapartment')->name('all-apartments');

Route::get('/result', 'ListingController@search')->name('result'); 

Route::get('/my-orders', 'UserController@getProfile')->name('my-orders'); 




Route::get('/add-to-cart/{id}',[
    'uses' => 'ListingController@getAddToCart',
    'as' => 'single-property.addToCart'
    
    ]);





Route::get('/reduce/{id}',[
        'uses' => 'ListingController@getReduceByOne',
        'as' => 'single-property.reduceByOne'     
    ]);
    
Route::get('/remove/{id}',[
        'uses' => 'ListingController@getRemoveItem',
        'as' => 'listing.remove'
        ]);

Route::get('/appointment-cart', 'ListingController@getCart')->name('appointment-cart'); 

//Route::get('/shoppingcart', 'ShopController@getCart')->name('shoppingcart'); 


//Route::get('/single-property', 'ListingController@index'); 

//Route::get('/single-property', 'ListingController@show')->name('single-property'); 

//Route::post('/single-property', 'ListingController@postTour')->name('single-property'); 

//Route::get('/home', 'ListingController@show')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

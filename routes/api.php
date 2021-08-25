<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
 //   return $request->user();
//});


Route::prefix('/user')->group( function() {
Route::post('/login', 'api\v1\LoginController@login');
    
});


Route::prefix('/user')->group( function() {
    Route::post('/register', 'api\v1\LoginController@register');
        
    });


    Route::prefix('/listing')->group( function() {
        Route::get('/allproperty', 'api\v1\PropertyController@allproperty');       
        });


        Route::prefix('/listing')->group( function() {
            Route::get('/apartment', 'api\v1\PropertyController@apartment');       
            });


        Route::prefix('/listing')->group( function() {
        Route::get('/search', 'api\v1\PropertyController@search');
    });



           // Route::get('/search/{name}', 'api\v1\PropertyController@search');

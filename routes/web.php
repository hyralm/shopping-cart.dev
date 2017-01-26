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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'user'], function() {
        Route::get('profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
    });

    Route::get('/add-to-cart/{id}', [
        'uses' => 'ProductController@getAddToCart',
        'as' => 'product.addToCart'
    ]);

    Route::get('/reduce/{id}', [
        'uses' => 'ProductController@getReduceByOne',
        'as' => 'product.reduceByOne'
    ]);

    Route::get('/remove/{id}', [
        'uses' => 'ProductController@getRemoveItem',
        'as' => 'product.removeItem'
    ]);

    Route::get('/shopping-cart', [
        'uses' => 'CartController@getShoppingCart',
        'as' => 'cart.shoppingCart'
    ]);

    Route::get('/checkout', [
        'uses' => 'OrderController@getCheckout',
        'as' => 'order.checkout'
    ]);

    Route::post('/checkout', [
        'uses' => 'OrderController@postCheckout',
        'as' => 'order.checkout'
    ]);
});

Auth::routes();

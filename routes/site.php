<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group(['middleware' => ['verification']], function () {
            Route::get('/home', "HomeController@home")->name('home');
            Route::get('/', "HomeController@home");
            Route::get('/category/{slug}', "HomeController@categoryProducts")->name('category.products');
            Route::get('/product/{slug}', "ProductController@product_details")->name('product.details');


            /************************************ cart */
            Route::group(['prefix' => 'cart'], function(){
                route::get('/', 'CartController@index')->name('cart');
                route::post('/add/{slug}', 'CartController@add_to_cart')->name('cart.add');
                route::get('/update/{slug}', 'CartController@update_cart')->name('cart.update');
                route::get('/update-all', 'CartController@update_all')->name('cart.update-all');
            });
            /************************************ ./cart */

        });

        Route::group(['middleware' => ['auth']], function () {

            Route::get('/verify-mobile', "Auth\UserVerification@show_verify")->name('user.verify_code');
            Route::post('/confirm-verify', "Auth\UserVerification@confirm_verify")->name('user.confirm_verify');

            /************************************ wishList */
            Route::group(['prefix' => 'wish-list'], function(){
                route::get('/', 'WishListController@index')->name('wishlist');
                route::get('/add', 'WishListController@store')->name('wish.list.add');
            });
            /************************************ ./wishList */

        });
    }
); // ./ localization

Auth::routes();

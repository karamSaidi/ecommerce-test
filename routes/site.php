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

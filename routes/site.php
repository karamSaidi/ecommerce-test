<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group(['middleware' => ['verification']], function () {
            Route::get('/home', function () {
                return view('site.home');
            })->name('home');
            Route::get('/', function () {
                return view('site.home');
            });
        });

        Route::group(['middleware' => ['auth']], function () {

            route::get('/verify-mobile', "Auth\UserVerification@show_verify")->name('user.verify_code');
            route::post('/confirm-verify', "Auth\UserVerification@confirm_verify")->name('user.confirm_verify');

        });
    }
); // ./ localization

Auth::routes();

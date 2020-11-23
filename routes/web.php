<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // use Illuminate\Support\Facades\Route;



        Route::get('/web', function () {
            return 'web route';
        });



        // Route::get('/home', [HomeController::class, 'index'])->name('home');



    }
); // ./ localization

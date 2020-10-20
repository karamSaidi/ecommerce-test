<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // use Illuminate\Support\Facades\Route;



        // Route::get('/', function () {
        //     return view('welcome');
        // });

        Auth::routes();

        // Route::get('/home', [HomeController::class, 'index'])->name('home');



    }
); // ./ localization

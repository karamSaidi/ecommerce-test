<?php


use Illuminate\Support\Facades\Route;
// namespace Admin set on routerserverviceprovider file


// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],
//     function () {

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // **********************  guest **********************
    Route::group(['middleware' => 'guest:admin'], function () {

        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('/login', 'AuthController@do_login')->name('login');
    }); //
    // **********************  ./ guest **********************

    // **********************  auth **********************
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', 'DashboardController@index');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    });
    // **********************  ./ auth **********************


}); // ./ end prefix => admin



//     }
// ); // ./ localization

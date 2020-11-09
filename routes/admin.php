<?php


use Illuminate\Support\Facades\Route;
// namespace Admin set on routerserverviceprovider file


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            // **********************  guest **********************
            Route::group(['middleware' => 'guest:admin'], function () {

                Route::get('/login', 'AuthController@login')->name('login');
                Route::post('/login', 'AuthController@do_login')->name('login');
            }); //
            // **********************  ./ guest **********************

            // **********************  auth **********************
            Route::group(['middleware' => 'auth:admin'], function () {

                Route::get('/logout', 'AuthController@logout')->name('logout');
                Route::get('/profile', 'AuthController@profile')->name('profile');
                Route::put('/profile/update', 'AuthController@profile_update')->name('profile.update');
                Route::put('/password_change', 'AuthController@password_change')->name('password_change');

                Route::get('/', 'DashboardController@index');
                Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



                /*************************** setting */
                Route::group(['prefix' => 'settings'], function () {
                    Route::get('shipping/{type?}', 'SettingController@edit_shipping')->name('settings.shipping.edit');
                    Route::put('shipping/{id}', 'SettingController@update_shipping')->name('settings.shipping.update');
                });
                /*************************** ./setting */

                /*************************** main-categories */
                Route::group(['prefix' => 'main-categories'], function () {
                    Route::get('/index', 'MainCategoriesController@index')->name('main_categories');
                    Route::get('/create', 'MainCategoriesController@create')->name('main_categories.create');
                    Route::post('/store', 'MainCategoriesController@store')->name('main_categories.store');
                    Route::get('/edit/{id}', 'MainCategoriesController@edit')->name('main_categories.edit');
                    Route::put('/update/{id}', 'MainCategoriesController@update')->name('main_categories.update');
                    Route::delete('/destroy/{id}', 'MainCategoriesController@destroy')->name('main_categories.destroy');
                });
                /*************************** ./main-categories */
            });
            // **********************  ./ auth **********************


        }); // ./ end prefix => admin



    }
); // ./ localization

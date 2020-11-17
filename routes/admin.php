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
                Route::group(['prefix' => 'categories'], function () {
                    Route::get('/index', 'CategoriesController@index')->name('categories');
                    Route::get('/sub', 'CategoriesController@index')->name('categories.sub');
                    Route::get('/create', 'CategoriesController@create')->name('categories.create');
                    Route::post('/store', 'CategoriesController@store')->name('categories.store');
                    Route::get('/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
                    Route::put('/update/{id}', 'CategoriesController@update')->name('categories.update');
                    Route::delete('/destroy/{id}', 'CategoriesController@destroy')->name('categories.destroy');
                });
                /*************************** ./main-categories */

                /*************************** brands */
                Route::group(['prefix' => 'brands'], function () {
                    Route::get('/index', 'BrandsController@index')->name('brands');
                    Route::get('/create', 'BrandsController@create')->name('brands.create');
                    Route::post('/store', 'BrandsController@store')->name('brands.store');
                    Route::get('/edit/{id}', 'BrandsController@edit')->name('brands.edit');
                    Route::put('/update/{id}', 'BrandsController@update')->name('brands.update');
                    Route::delete('/destroy/{id}', 'BrandsController@destroy')->name('brands.destroy');
                });
                /*************************** ./brands */

                /*************************** tags */
                Route::group(['prefix' => 'tags'], function () {
                    Route::get('/index', 'TagsController@index')->name('tags');
                    Route::get('/create', 'TagsController@create')->name('tags.create');
                    Route::post('/store', 'TagsController@store')->name('tags.store');
                    Route::get('/edit/{id}', 'TagsController@edit')->name('tags.edit');
                    Route::put('/update/{id}', 'TagsController@update')->name('tags.update');
                    Route::delete('/destroy/{id}', 'TagsController@destroy')->name('tags.destroy');
                });
                /*************************** ./tags */

                /*************************** products */
                Route::group(['prefix' => 'products'], function () {
                    Route::get('/index', 'ProductsController@index')->name('products');

                    Route::get('/create-general-information', 'ProductsController@create')->name('products_general.create');
                    Route::post('/store-general-information', 'ProductsController@store')->name('products_general.store');

                    Route::get('/price-information/{product_id}', 'ProductsController@getProductPrice')->name('products_price.get');
                    Route::post('/store-price-information', 'ProductsController@saveProductPrice')->name('products_price.store');

                    Route::get('/stock-information/{product_id}', 'ProductsController@getProductStock')->name('products_stock.get');
                    Route::post('/store-stock-information', 'ProductsController@saveProductStock')->name('products_stock.store');

                    Route::get('/edit/{id}', 'ProductsController@edit')->name('products.edit');
                    Route::put('/update/{id}', 'ProductsController@update')->name('products.update');
                    Route::delete('/destroy/{id}', 'ProductsController@destroy')->name('products.destroy');
                });
                /*************************** ./products */
            });
            // **********************  ./ auth **********************


        }); // ./ end prefix => admin



    }
); // ./ localization

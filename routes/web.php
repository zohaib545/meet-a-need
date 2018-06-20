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

Route::get('/', 'WelcomeController@index');
Route::get('location', 'HomeController@index');
Route::get('location/{place_id}', 'HomeController@location_detail');
Route::get('contact', function () {
    return view('frontend.pages.contact');
});
Route::post('contact', 'ContactController@send_mail');
Route::get('about', function () {
    return view('frontend.pages.about');
});
Route::prefix('api')->group(function () {
    Route::post('location/infobox', 'HomeController@infobox');
    Route::get('location', 'HomeController@location');
});

Route::group(['middleware' => ['guest:admin']],function(){
    Route::get('login', 'Admin\AdminController@login_index')->name('login');
    Route::post('login', 'Admin\AdminController@login')->name('login');
    Route::get('request-password', 'Admin\AdminController@request_index');
    Route::get('reset-password', 'Admin\AdminController@reset_index');
});

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::get('logout', 'Admin\AdminController@logout');
        //LOCATION
        Route::prefix('location')->group(function () {
            Route::get('/', 'Admin\LocationController@index');
            Route::post('/', 'Admin\LocationController@store');
            Route::delete('/', 'Admin\LocationController@delete');
        });

        //UNIVERSITY
        Route::prefix('university')->group(function () {
            Route::get('/', 'Admin\UniversityController@index');
            Route::get('{location_slug}/edit', 'Admin\UniversityController@edit');
            Route::put('/', 'Admin\UniversityController@update');
        });

        //HEALTHCARE
        Route::prefix('healthcare')->group(function () {
            Route::get('/', 'Admin\HealthcareController@index');
            Route::get('{location_slug}/edit', 'Admin\HealthcareController@edit');
            Route::put('/', 'Admin\HealthcareController@update');
        });

        //HOTEL
        Route::prefix('hotel')->group(function () {
            Route::get('/', 'Admin\HotelController@index');
            Route::get('{location_slug}/edit', 'Admin\HotelController@edit');
            Route::put('/', 'Admin\HotelController@update');
        });

        //RESTAURANT
        Route::prefix('restaurant')->group(function () {
            Route::get('/', 'Admin\RestaurantController@index');
            Route::get('{location_slug}/edit', 'Admin\RestaurantController@edit');
            Route::put('/', 'Admin\RestaurantController@update');
        });

        //PROFILE
        Route::prefix('profile')->group(function () {
            Route::get('/', 'Admin\AdminController@index');
            Route::put('/', 'Admin\AdminController@update');
            Route::put('/password', 'Admin\AdminController@update_password');
        });

        //Admins
        Route::prefix('admins')->group(function(){
            Route::get('/', 'Admin\AdminsController@index');
            Route::post('/', 'Admin\AdminsController@store');
            Route::delete('/', 'Admin\AdminsController@delete');
        });
    });
});

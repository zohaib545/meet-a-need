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

Route::get('/', function(){
    return view('frontend.pages.welcome');
});
Route::get('location', 'HomeController@index');
Route::get('location/{place_id}', 'HomeController@location_detail');
Route::get('contact', function(){
    return view('frontend.pages.contact');
});
Route::get('about', function(){
    return view('frontend.pages.about');
});
Route::prefix('api')->group(function(){
    Route::post('location/infobox', 'HomeController@infobox');
    Route::get('location', 'HomeController@location');
});


Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@index');
    //LOCATION
    Route::prefix('location')->group(function(){
        Route::get('/', 'Admin\LocationController@index');
        Route::post('/', 'Admin\LocationController@store');
        Route::delete('/', 'Admin\LocationController@delete');
    });

    //UNIVERSITY
    Route::prefix('university')->group(function(){
        Route::get('/', 'Admin\UniversityController@index');
        Route::get('{location_slug}/edit', 'Admin\UniversityController@edit');
        Route::put('/', 'Admin\UniversityController@update');
    });

    //HEALTHCARE
    Route::prefix('healthcare')->group(function(){
        Route::get('/', 'Admin\HealthcareController@index');
        Route::get('{location_slug}/edit', 'Admin\HealthcareController@edit');
        Route::put('/', 'Admin\HealthcareController@update');
    });

    //HOTEL
    Route::prefix('hotel')->group(function(){
        Route::get('/', 'Admin\HotelController@index');
        Route::get('{location_slug}/edit', 'Admin\HotelController@edit');
        Route::put('/', 'Admin\HotelController@update');
    });

    //HOTEL
    Route::prefix('restaurant')->group(function(){
        Route::get('/', 'Admin\RestaurantController@index');
        Route::get('{location_slug}/edit', 'Admin\RestaurantController@edit');
        Route::put('/', 'Admin\RestaurantController@update');
    });
});
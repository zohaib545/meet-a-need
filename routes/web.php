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

Route::get('/', function () {
    return view('frontend.pages.home');
});


Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@index');
    //LOCATION
    Route::prefix('location')->group(function(){
        Route::get('/', 'Admin\LocationController@index');
        Route::post('/', 'Admin\LocationController@store');
        Route::delete('/', 'Admin\LocationController@delete');
    });

    Route::prefix('university')->group(function(){
        Route::get('/', 'Admin\UniversityController@index');
        Route::get('{location_slug}/edit', 'Admin\UniversityController@edit');
        Route::put('/', 'Admin\UniversityController@update');
    });


});
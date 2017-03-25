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


Route::group(['namespace' => 'Frontend'], function(){

    Route::get('/', 'HomeController@index')->name('frontend.home');

    Route::get('about-us', 'HomeController@aboutus')->name('frontend.about_us');

    Route::get('services', 'HomeController@services')->name('frontend.services');

    Route::get('mro-capabilities', 'HomeController@mro')->name('frontend.mro');

    Route::get('news', 'HomeController@news')->name('frontend.news');

    Route::get('contact-us', 'HomeController@contactus')->name('frontend.contact_us');

});
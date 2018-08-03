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

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index')->name('frontend.home');

    Route::get('about-us', 'HomeController@aboutus')->name('frontend.about_us');

    Route::get('mro-solutions', 'HomeController@mro_solutions')->name('frontend.services.mro-solutions');

    Route::get('trading', 'HomeController@trading')->name('frontend.services.trading');

    Route::get('military-solutions', 'HomeController@military_solutions')->name('frontend.services.military-solutions');

    Route::get('mro-capabilities', 'HomeController@mro')->name('frontend.mro');

    Route::get('accessories', 'HomeController@accessories')->name('frontend.accessories');

    Route::get('rfq', 'HomeController@rfq')->name('frontend.rfq');

    Route::get('contact-us', 'HomeController@contactus')->name('frontend.contact_us');

    Route::get('certifications', 'HomeController@certifications')->name('frontend.certifications');

    Route::get('overview', 'HomeController@overview')->name('frontend.overview');

    Route::get('gallery', 'HomeController@gallery')->name('frontend.gallery');
});
<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//});

Route::get('/home', 'HomeController@index')->name('home');

//Admin routes


//    Route::group(['middleware' => 'admin'], function() {
//        Route::get('/', 'DashboardController')->name('admin.dashboard');
//    });

Route::get('/admin', 'Admin\DashboardController@show')->name('admin');

Route::resource('admin/testimonialslider','Admin\TestimonialSliderController');
Route::resource('admin/testimonial','Admin\TestimonialController');
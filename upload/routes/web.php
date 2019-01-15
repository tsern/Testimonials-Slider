<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'Admin\DashboardController@show')->name('admin');
    Route::resource('/testimonialslider','Admin\TestimonialSliderController');
    Route::resource('/testimonial','Admin\TestimonialController');
});


<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//});

Route::get('/home', 'HomeController@index')->name('home');

//Admin routes
Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'Admin.',
    ],
    function(){
//        Route::get('/',['as' => 'dashboard','uses' => 'DashboardController@show']);
//        Route::get('/testimonials/',['as' => 'testimonials','uses' => 'TestimonialSliderController@index']);
//        Route::get('/testimonials/index',['as' => 'testimonials','uses' => 'TestimonialSliderController@index']);
//        Route::get('/testimonials/edit',['as' => 'testimonials','uses' => 'TestimonialSliderController@edit']);
//        Route::get('/testimonials/destroy',['as' => 'testimonials','uses' => 'TestimonialSliderController@destroy']);
//        Route::get('/testimonials/create',['as' => 'testimonials/create','uses' => 'TestimonialSliderController@create']);
//        Route::get('/users/',['as' => 'users','uses' => 'UserController@show']);
//        Route::get('/images/',['as' => 'images','uses' => 'TestimonialController@show']);
    });

//    Route::group(['middleware' => 'admin'], function() {
//        Route::get('/', 'DashboardController')->name('admin.dashboard');
//    });

Route::get('/admin', 'Admin\DashboardController@show')->name('admin');

Route::resource('admin/testimonialslider','Admin\TestimonialSliderController');
Route::resource('admin/testimonial','Admin\TestimonialController');
Route::resource('admin/image','Admin\ImageController');
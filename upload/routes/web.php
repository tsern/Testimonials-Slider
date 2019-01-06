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
        Route::get('/',['as' => 'dashboard','uses' => 'DashboardController@show']);
//        Route::get('/testimonials/',['as' => 'testimonials','uses' => 'TestimonialsController@index']);
//        Route::get('/testimonials/index',['as' => 'testimonials','uses' => 'TestimonialsController@index']);
//        Route::get('/testimonials/edit',['as' => 'testimonials','uses' => 'TestimonialsController@edit']);
//        Route::get('/testimonials/destroy',['as' => 'testimonials','uses' => 'TestimonialsController@destroy']);
//        Route::get('/testimonials/create',['as' => 'testimonials/create','uses' => 'TestimonialsController@create']);
        Route::get('/users/',['as' => 'users','uses' => 'UserController@show']);
//        Route::get('/images/',['as' => 'images','uses' => 'ImageController@show']);
    });

//    Route::group(['middleware' => 'admin'], function() {
//        Route::get('/', 'DashboardController')->name('admin.dashboard');
//    });

Route::resource('admin/testimonials','Admin\TestimonialsController');
Route::resource('admin/images','Admin\ImageController');
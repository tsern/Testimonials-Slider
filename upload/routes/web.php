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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

////admin routes
//Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {
//    Route::get('login', 'LoginController@index');
//    Route::post('login', 'LoginController@login')->name('admin.login');
//
////    Route::group(['middleware' => 'admin'], function () {
////        Route::get('/', 'DashboardController')->name('admin.dashboard');
////    });
//});

//Site routes
//Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'HomeController@index')->name('home');
//});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'Admin.',
    ],
    function(){
        Route::get('/',['as' => 'dashboard','uses' => 'DashboardController@show']);
    }
);
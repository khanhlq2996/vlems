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
// Auth::routes();

// Route::group(['middleware' => 'auth'], function () {

//     Route::get('pages-logout', 'RoutingController@logout');
//     Route::get('admin', 'RoutingController@adminIndex');
//     Route::get('admin/{first}/{second}/{third}', 'RoutingController@adminThirdLevel');
//     Route::get('admin/{first}/{second}', 'RoutingController@adminSecondLevel');

// });

// Route::get('/', 'RoutingController@clientIndex');
// Route::get('{first}/{second}', 'RoutingController@clientSecondLevel');
// Route::get('{first}/{second}/{third}', 'RoutingController@clientThirdLevel');

// Route::get('{any}', 'RoutingController@root');

Route::group(['middleware' => 'guest'], function () {
    Route::get('admin', function () {return redirect('admin/login');});
    Route::get('login', function () {return redirect('admin/login');});
    Route::get('admin/login', 'Auth\LoginController@index')->name('form.login');
    Route::post('/login', 'LoginController@postLogin')->name('login');
});
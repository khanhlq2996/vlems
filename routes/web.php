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

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('admin', function () {return redirect('admin/login');});
//     Route::get('login', function () {return redirect('admin/login');});
//     // Route::get('admin/login', 'Auth\LoginController@index')->name('form.login');
//     Route::post('/login', 'LoginController@postLogin')->name('login');
// });

Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::get('admin/login', function () {
    return view('admin.auth.login');
});

// Company
Route::get('admin/company', function () {return redirect('admin/company/page/1');});

Route::get('admin/company/page/{page}', function ($page) {
    return view('admin.company.list');
});

Route::get('admin/company/detail/{id}', function ($id) {
    return view('admin.company.detail');
});

Route::get('admin/company/add', function () {
    return view('admin.company.detail');
});

// CV
Route::get('admin/cv', function () {return redirect('admin/cv/page/1');});

Route::get('admin/cv/page/{page}', function ($page) {
    return view('admin.cv.list');
});

Route::get('admin/cv/detail/{id}', function ($id) {
    return view('admin.cv.detail');
});

Route::get('admin/cv/add', function () {
    return view('admin.cv.detail');
});


// Program
Route::get('admin/program', function () {return redirect('admin/program/page/1');});

Route::get('admin/program/page/{page}', function ($page) {
    return view('admin.program.list');
});

Route::get('admin/program/detail/{id}', function ($id) {
    return view('admin.program.detail');
});

Route::get('admin/program/add', function () {
    return view('admin.program.detail');
});

// Agency
Route::get('admin/agency', function () {return redirect('admin/agency/page/1');});

Route::get('admin/agency/page/{page}', function ($page) {
    return view('admin.agency.list');
});

Route::get('admin/agency/detail/{id}', function ($id) {
    return view('admin.agency.detail');
});

Route::get('admin/agency/add', function () {
    return view('admin.agency.detail');
});

// Employee
Route::get('admin/employee', function () {return redirect('admin/employee/page/1');});

Route::get('admin/employee/page/{page}', function ($page) {
    return view('admin.employee.list');
});

Route::get('admin/employee/detail/{id}', function ($id) {
    return view('admin.employee.detail');
});

Route::get('admin/employee/add', function () {
    return view('admin.employee.detail');
});




Route::get('admin/{first}/{second}', function ($first, $second) {
    return view('admin.' . $first . '.' . $second );
});

Route::get('admin/{first}/{second}/{third}', function ($first, $second, $third) {
    return view('admin.' . $first . '.' . $second . '.' . $third);
});
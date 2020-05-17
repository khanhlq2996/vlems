<?php


Route::group(['namespace' => 'Admin', 'middleware' => 'web'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => 'guest'], function () {
            Route::get('login', 'LoginController@index')->name('form.login');
            Route::post('login', 'LoginController@postLogin')->name('access.login');
            Route::get('register/{type}', 'LoginController@getRegister')->name('access.register');
        });

        Route::group(['middleware' => 'auth'], function () {
            Route::get('logout', 'LoginController@logout')->name('access.logout');
        });
    });

    // Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //     Route::group(['prefix' => 'system'], function () {
    //         Route::resource('users', 'UserController')->except(['edit', 'update']);
    //         Route::group(['prefix' => 'users'], function () {
    //             Route::get('/profile/{id}', 'UserController@getUserProfile')->name('user.profile.view');
    //             Route::post('/update-profile/{id}', 'UserController@postUpdateUserProfile')->name('user.update-profile');
    //             Route::post('/change-password/{id}', 'UserController@postChangeUserPassword')->name('user.change-password');
    //             Route::post('/change-profile-image', 'UserController@postChangeProfileImage')->name('user.change-profile-image');

    //             Route::delete('items/destroy', [
    //                 'as'         => 'users.deletes',
    //                 'uses'       => 'UserController@deletes',
    //             ]);
    //         });
    //     });
    // });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

// Company
Route::get('admin/company', function () {
    return redirect('admin/company/page/1');
});

Route::get('admin/company/dashboard', function () {
    return view('admin.company.dashboard');
});

Route::get('admin/company/page/{page}', function ($page) {
    return view('admin.company.list');
});

Route::get('admin/company/detail/{id}', function ($id) {
    return view('admin.company.detail');
});

Route::get('admin/company/edit/{id}', function ($id) {
    return view('admin.company.add');
});

Route::get('admin/company/add', function () {
    return view('admin.company.add');
});

Route::get('admin/employee/page/{page}', function ($page) {
    return view('admin.employee.list');
});

Route::get('admin/employee/detail/{id}', function ($id) {
    return view('admin.employee.detail');
});

Route::get('admin/employee/edit/{id}', function ($id) {
    return view('admin.employee.add');
});

Route::get('admin/employee/add', function () {
    return view('admin.employee.detail');
});


// CV
Route::get('admin/cv', function () {
    return redirect('admin/cv/page/1');
});

Route::get('admin/cv/page/{page}', function ($page) {
    return view('admin.cv.list');
});

Route::get('admin/cv/detail/{id}', function ($id) {
    return view('admin.cv.detail');
});

Route::get('admin/cv/edit/{id}', function ($id) {
    return view('admin.cv.add');
});

Route::get('admin/cv/add', function () {
    return view('admin.cv.detail');
});


// Program
Route::get('admin/program', function () {
    return redirect('admin/program/page/1');
});

Route::get('admin/program/page/{page}', function ($page) {
    return view('admin.program.list');
});

Route::get('admin/program/detail/{id}', function ($id) {
    return view('admin.program.detail');
});

Route::get('admin/program/edit/{id}', function ($id) {
    return view('admin.program.edit');
});

Route::get('admin/program/add', function () {
    return view('admin.program.detail');
});

// Agency
Route::get('admin/agency', function () {
    return redirect('admin/agency/page/1');
});

Route::get('admin/agency/dashboard', function () {
    return view('admin.agency.dashboard');
});

Route::get('admin/agency/page/{page}', function ($page) {
    return view('admin.agency.list');
});

Route::get('admin/agency/detail/{id}', function ($id) {
    return view('admin.agency.detail');
});

Route::get('admin/agency/edit/{id}', function ($id) {
    return view('admin.agency.edit');
});

Route::get('admin/agency/add', function () {
    return view('admin.agency.add');
});

// Order
Route::get('admin/order', function () {
    return redirect('admin/order/page/1');
});

Route::get('admin/order/page/{page}', function ($page) {
    return view('admin.order.list');
});

Route::get('admin/order/detail/{id}', function ($id) {
    return view('admin.order.detail');
});

Route::get('admin/order/edit/{id}', function ($id) {
    return view('admin.order.add');
});


Route::get('admin/order/add', function () {
    return view('admin.order.add');
});

// Labour
Route::get('admin/labour', function () {
    return redirect('admin/labour/page/1');
});

Route::get('admin/labour/page/{page}', function ($page) {
    return view('admin.labour.list');
});

Route::get('admin/labour/detail/{id}', function ($id) {
    return view('admin.labour.detail');
});

Route::get('admin/labour/edit/{id}', function ($id) {
    return view('admin.labour.add');
});

Route::get('admin/labour/add', function () {
    return view('admin.labour.detail');
});


// Client Route

Route::get('/', function () {
    return view('home');
});

Route::get('dang-nhap.html', function () {
    return view('login');
});

Route::get('cong-ty/', function () {
    return view('company.list');
});

Route::get('cong-ty/trang/{id}/', function () {
    return view('company.list');
});

Route::get('cong-ty/{id}.html', function () {
    return view('company.detail');
});

Route::get('chuong-trinh/', function () {
    return view('program.list');
});

Route::get('chuong-trinh/page/{id}', function () {
    return view('program.list');
});

Route::get('nguoi-lao-dong/{id}', function () {
    return view('labour.detail');
});

Route::get('nguoi-lao-dong', function () {
    return view('labour.list');
});

Route::get('nguoi-lao-dong/trang/{id}', function () {
    return view('labour.list');
});

Route::get('nguoi-lao-dong/{id}', function () {
    return view('labour.detail');
});

Route::get('nguoi-lao-dong/chinh-sua/{id}', function () {
    return view('labour.edit');
});


//// Packet
//Route::get('admin/packet', function () {
//    return redirect('admin/packet/page/1');
//});
//
//Route::get('admin/packet/page/{page}', function ($page) {
//    return view('admin.packet.list');
//});
//
//Route::get('admin/packet/detail/{id}', function ($id) {
//    return view('admin.packet.detail');
//});
//e
//Route::get('admin/packet/edit/{id}', function ($id) {
//    return view('admin.packet.add');
//});
//
//Route::get('admin/packet/add', function () {
//    return view('admin.packet.detail');
//});


// Route::get('admin/{first}/{second}', function ($first, $second) {
//     return view('admin.' . $first . '.' . $second);
// });

// Route::get('admin/{first}/{second}/{third}', function ($first, $second, $third) {
//     return view('admin.' . $first . '.' . $second . '.' . $third);
// });


Route::get('admin/charts', function () {
    return view('admin.charts');
});
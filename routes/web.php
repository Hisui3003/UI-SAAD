<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});


//two register
Route::get('landlord_register', function () {
    return view('landlord_register');
});

Route::get('renter_register', function () {
    return view('renter_register');
});

Route::get('listproperty', function () {
    return view('listproperty');
});

Route::get('viewing', function () {
    return view('viewing');
});

Route::get('rentals', function () {
    return view('rentals');
});

Route::get('user', function () {
    return view('user');
});

Route::get('adminpage', function () {
    return view('adminpage');
});

Route::get('addphotos', function () {
    return view('addphotos');
});

Route::get('map', function () {
    return view('map');
});

Route::get('adminmanage', function () {
    return view('adminmanage');
});

Route::get('updateproperty', function () {
    return view('updateproperty');
});

Route::get('aboutus', function () {
    return view('aboutus');
});

Route::get('tenant_user', function () {
    return view('tenant_user');
});

Route::get('contract', function () {
    return view('contract');
});

Route::get('paymentform', function () {
    return view('paymentform');
});

Route::get('pageadmin', function () {
    return view('pageadmin');
});


// FOR TESTING
// FOR TESTING
// FOR TESTING

// admnidash

Route::get('admin/admindash', function () {
    return view('admin.admindash');
})->name('admin.admindash');

// adminverification

Route::get('admin/adminverification', function () {
    return view('admin.adminverification');
})->name('admin.adminverification');

// adminmanagement

Route::get('admin/adminmanagement', function () {
    return view('admin.adminmanagement');
})->name('admin.adminmanagement');

// adminproperties

Route::get('admin/adminproperties', function () {
    return view('admin.adminproperties');
})->name('admin.adminproperties');

// FOR TESTING
// FOR TESTING
// FOR TESTING

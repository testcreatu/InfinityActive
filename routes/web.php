<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::get('vendor-login', function () {
    return view('login.login');
});

Route::post('vendor-login-submit','Vendor\LoginController@login');

Route::get('/', function () {
    return view('login.login');
});



Auth::routes();

Route::get('/admin-home', 'HomeController@index')->name('home');
// Route::get('/', function(){
// 	return view('welcome');
// });

Route::get('/vendor-form', function(){
	return view('vendor.vendor-detail.addProduct');
});
Route::get('vendor/logout', function(){
	Session::flush();
	return redirect('/');
});

Route::group(['prefix'=>'admin'], function(){

	Route::get('dashboard', function(){
		return view('admin.dashboard');
	})->middleware(['CheckAdmin']);

	Route::get('add-vendor','backend\VendorController@add')->middleware(['CheckAdmin']);
	Route::post('save-vendor','backend\VendorController@save')->middleware(['CheckAdmin']);
	Route::get('vendor','backend\VendorController@view')->middleware(['CheckAdmin']);
	Route::get('edit-vendor/{vendor_uuid}','backend\VendorController@edit')->middleware(['CheckAdmin']);
	Route::post('update-vendor/{vendor_uuid}','backend\VendorController@update')->middleware(['CheckAdmin']);
	Route::get('delete-vendor/{vendor_uuid}','backend\VendorController@delete')->middleware(['CheckAdmin']);

	Route::get('add-branch','backend\BranchController@add')->middleware(['CheckAdmin']);
	Route::post('save-branch','backend\BranchController@save')->middleware(['CheckAdmin']);
	Route::get('branch','backend\BranchController@view')->middleware(['CheckAdmin']);
	Route::get('edit-branch/{id}','backend\BranchController@edit')->middleware(['CheckAdmin']);
	Route::post('update-branch/{id}','backend\BranchController@update')->middleware(['CheckAdmin']);
	Route::get('delete-branch/{id}','backend\BranchController@delete')->middleware(['CheckAdmin']);

	Route::get('add-model','backend\ModelController@add')->middleware(['CheckAdmin']);
	Route::post('save-model','backend\ModelController@save')->middleware(['CheckAdmin']);
	Route::get('model','backend\ModelController@view')->middleware(['CheckAdmin']);
	Route::get('edit-model/{id}','backend\ModelController@edit')->middleware(['CheckAdmin']);
	Route::post('update-model/{id}','backend\ModelController@update')->middleware(['CheckAdmin']);
	Route::get('delete-model/{id}','backend\ModelController@delete')->middleware(['CheckAdmin']);

	Route::get('vendor-information','backend\VendorDetailController@view')->middleware(['CheckAdmin']);
	Route::get('vendor-information-edit/{id}','backend\VendorDetailController@edit')->middleware(['CheckAdmin']);
	Route::post('vendor-information-update/{id}','backend\VendorDetailController@update')->middleware(['CheckAdmin']);
	Route::get('vendor-information-delete/{id}','backend\VendorDetailController@delete')->middleware(['CheckAdmin']);

});

Route::post('save-product','backend\ProductController@save');

// Route::get('new-home', function () {
//     return view('home.home');
// });

Route::get('home','HomeController@form')->middleware(['CheckVendor']);
Route::get('/view-product','HomeController@viewProduct')->middleware(['CheckVendor']);

Route::get('link', function () {
    return view('link.link');
});

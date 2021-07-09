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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vendor-form', function(){
	return view('vendor.vendor-detail.addProduct');
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

	Route::get('add-branch','backend\BranchController@add');
	Route::post('save-branch','backend\BranchController@save');
	Route::get('branch','backend\BranchController@view');
	Route::get('edit-branch/{id}','backend\BranchController@edit');
	Route::post('update-branch/{id}','backend\BranchController@update');
	Route::get('delete-branch/{id}','backend\BranchController@delete');

	Route::get('add-model','backend\ModelController@add');
	Route::post('save-model','backend\ModelController@save');
	Route::get('model','backend\ModelController@view');
	Route::get('edit-model/{id}','backend\ModelController@edit');
	Route::post('update-model/{id}','backend\ModelController@update');
	Route::get('delete-model/{id}','backend\ModelController@delete');

});

Route::post('save-product','backend\ProductController@save');

Route::get('new-home', function () {
    return view('home.home');
});

Route::get('link', function () {
    return view('link.link');
});

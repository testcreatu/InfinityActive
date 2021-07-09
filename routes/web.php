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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){

	Route::get('dashboard', function(){
		return view('admin.dashboard');
	})->middleware(['CheckAdmin']);

	Route::get('add-vendor','backend\VendorController@add');
	Route::post('save-vendor','backend\VendorController@save');
	Route::get('vendor','backend\VendorController@view');
	Route::get('edit-vendor/{vendor_uuid}','backend\VendorController@edit');
	Route::post('update-vendor/{vendor_uuid}','backend\VendorController@update');
	Route::get('delete-vendor/{vendor_uuid}','backend\VendorController@delete');

});

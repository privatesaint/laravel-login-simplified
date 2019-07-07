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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// All Admin route goes in here
Route::group(['as' => 'admin.','prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],function(){
	Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
});

// All User route goes in here
Route::group(['as' => 'auth.','prefix' => 'auth', 'namespace' => 'User', 'middleware' => ['auth', 'user']],function(){
	Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
});

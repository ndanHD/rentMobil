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
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard', 'PageUserController@adminDashboard')->name('admin.dashboard');

Route::get('/admin/cars', 'CarController@adminMobil')->name('admin.mobil');
Route::get('/admin/cars/add', 'CarController@vAddMobil')->name('vAddMobil');
Route::post('/admin/cars/add', 'CarController@addMobil')->name('addMobil');
Route::get('/admin/cars/edit/{id}', 'CarController@vEditMobil')->name('vEditMobil');
Route::post('/admin/cars/edit/{id}', 'CarController@editMobil')->name('editMobil');


Route::get('/admin/transaksi', 'PageUserController@transaksi')->name('admin.transaksi');
Route::get('/admin/cust', 'PageUserController@customer')->name('customer');

// Route::get('/user/sewa', 'BookingController@vSewaMobil')->name('user.sewa');
Route::get('/user/sewa', 'BookingController@vSewaMobil')->name('user.sewa');
Route::post('/user/sewa', 'BookingController@sewaMobil')->name('tambahSewa');
Route::get('/user/kembali', 'BookingController@kembaliMobil')->name('user.kembali');
Route::post('/user/kembalikansewa', 'BookingController@kembalikanMobil')->name('kembalikanSewa');

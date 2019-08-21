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
    return view('login.index');
});

Route::get('/login', 'Logincontroller@index')->name('login.index');
Route::post('/login', 'Logincontroller@valid')->name('login.valid');
Route::get('/register', 'Logincontroller@register')->name('login.register');
Route::post('/register', 'Logincontroller@registration')->name('login.register');

Route::get('/admin', 'admincontroller@index')->name('admin.index');
Route::get('/addmedicine', 'admincontroller@add')->name('admin.addmedicine');
Route::post('/addmedicine', 'admincontroller@addmedicine')->name('admin.addmedicine');
Route::get('/showcustomer', 'admincontroller@showcustomer')->name('admin.showcustomer');
Route::get('/deletecustomer/{cid}', 'admincontroller@delete')->name('admin.deletecustomer');
Route::post('/deletecustomer/{cid}', 'admincontroller@remove')->name('admin.deletecustomer');
Route::get('/medicines', 'admincontroller@showmedicines')->name('admin.medicines');
Route::get('/editmedicine/{mid}', 'admincontroller@edit')->name('admin.editmedicine');
Route::post('/editmedicine/{mid}', 'admincontroller@update')->name('admin.editmedicine');
Route::get('/deletemedicine/{mid}', 'admincontroller@deletemed')->name('admin.deletemedicine');
Route::post('/deletemedicine/{mid}', 'admincontroller@removemed')->name('admin.deletemedicine');

Route::get('/customer', 'customercontroller@index')->name('customer.index');

Route::get('/logout', 'LogoutController@index')->name('logout');


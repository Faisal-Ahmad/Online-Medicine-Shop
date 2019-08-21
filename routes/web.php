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

Route::get('/customer', 'customercontroller@index')->name('customer.index');

Route::get('/logout', 'LogoutController@index')->name('logout');


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

Route::get('/kids', function () {
    return view('kids');
});

Route::get('/', 'EmailAvailable@index');

Route::post('/check', 'EmailAvailable@check')->name('email_available.check');
Route::resource('customerInfo', 'CustomerController');
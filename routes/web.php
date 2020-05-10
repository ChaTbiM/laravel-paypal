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

Route::view('/checkout', 'checkout-page');
Route::post('/checkout', 'PaypalController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaypalController@confirmPayment')->name('confirm-payment');

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
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
Route::get('/table', function () {
    return view('backend.table');
})->name('table');
Route::get('/chart', function () {
    return view('backend.charts');
})->name('charts');

Route::get('/categories', function () {
    return view('backend.categories');
})->name('categories');
//Route::get('/', function () {
//    return view('ecommerce.home');
//});
Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/product', function () {
    return view('ecommerce.product');
})->name('product');

Route::get('/product-details', function () {
    return view('ecommerce.product_details');
})->name('product-details');

Route::get('/log-in', function () {
    return view('ecommerce.log_in');
})->name('log-in');

Route::get('/sign-up', function () {
    return view('ecommerce.sign_up');
})->name('sign-up');

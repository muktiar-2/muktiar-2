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
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/product_detail', function () {
    return view('product_detail');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/signup', function () {
    return view('signup');
});



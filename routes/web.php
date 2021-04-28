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
Route::get('/digikala', function () {
    return view('index');
});
Route::get('/single-product', function () {
//    dd( Route::getCurrentRoute()->uri == 'single-product' );
    return view('single-product');
});

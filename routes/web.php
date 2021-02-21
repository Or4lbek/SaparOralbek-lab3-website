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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/coffee', function () {
    return view('second_page');
})->name('coffee');
Route::get('/order_online', function () {
    return view('third_page');
})->name('order');
Route::get('/contacts', function () {
    return view('fourth_page');
})->name('contacts');
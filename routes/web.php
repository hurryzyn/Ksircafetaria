<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/detail_product', function () {
    return view('cust.product.detail_product');
});
Route::get('/cust/login', function () {
    return view('cust.login.login');
})->name('login');
Route::get('/admin/dashboard/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->name('login');



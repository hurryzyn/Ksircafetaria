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
})->name('dashboard');
Route::get('/admin/event/event', function () {
    return view('admin.event.event');
})->name('event');
Route::get('/admin/ticket/ticket', function () {
    return view('admin.ticket.ticket');
})->name('ticket');
Route::get('/admin/absen/absen', function () {
    return view('admin.absen.absen');
})->name('absen');
Route::get('/admin/user/usertable', function () {
    return view('admin.user.usertable');
})->name('usertable');


Route::middleware(['checkrole:admin'])->group(function () {
    // Rute yang hanya dapat diakses oleh pengguna dengan peran admin
});
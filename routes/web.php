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
    return view('landing_pages');
})->name('landing_pages');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/wilayah', function () {
    return view('wilayah');
})->name('wilayah');

Route::get('/penunjang', function () {
    return view('penunjang');
})->name('penunjang');

Route::get('/klasifikasi', function () {
    return view('klasifikasi');
})->name('klasifikasi');

Route::get('/penghargaan', function () {
    return view('penghargaan');
})->name('penghargaan');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/portal', function () {
    return view('portal');
})->name('portal');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

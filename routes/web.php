<?php

use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', function () {
    return view('menu.home');
});

Route::get('/home', function () {
    return view('menu.home');
});

Route::get('/ap2ln', function () {
    return view('menu.ap2ln');
});

Route::get('/informasi', function () {
    return view('menu.informasi.index');
});

Route::get('/informasi/jadwal', function () {
    return view('menu.informasi.jadwal');
});

Route::get('/karir', function () {
    return view('menu.karir');
});

Route::get('/kontak', function () {
    return view('menu.kontak');
});

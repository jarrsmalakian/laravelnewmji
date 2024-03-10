<?php

use App\Http\Controllers\Ap2lnController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\KontakController;
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
    return view('welcome');
});

Route::get('/ap2ln', [Ap2lnController::class,         'ap2ln']);
Route::get('/informasi', [InformasiController::class, 'informasi']);
Route::get('/karir', [KarirController::class,         'karir']);
Route::get('/kontak', [KontakController::class,       'kontak']);

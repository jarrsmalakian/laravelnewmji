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

/*
 * navbar
 */
// Route::get('/ap2ln', [Ap2lnController::class,         'ap2ln']);
// Route::get('/informasi', [InformasiController::class, 'informasi']);
// Route::get('/karir', [KarirController::class,         'karir']);
// Route::get('/kontak', [KontakController::class,       'kontak']);

// Backend

Route::get('/admin/posts', 'App\Http\Controllers\Admin\PostController@index')->name('admin.posts.index');
Route::get('/admin/posts/create', 'App\Http\Controllers\Admin\PostController@create')->name('admin.posts.create');
Route::post('/admin/posts/store', 'App\Http\Controllers\Admin\PostController@store')->name('admin.posts.store');
Route::get('/admin/posts/{post}/edit', 'App\Http\Controllers\Admin\PostController@edit')->name('admin.posts.edit');
Route::patch('/admin/posts/{post}', 'App\Http\Controllers\Admin\PostController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{post}', 'App\Http\Controllers\Admin\PostController@destroy')->name('admin.posts.destroy');

// Frontend
Route::get('/', 'App\Http\Controllers\PostController@insdex')->name('posts.index');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show')->name('posts.show');

// Comments
Route::post('/posts/{post}/comments', 'App\Http\Controllers\CommentController@store')->name('comments.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('middlewareName');
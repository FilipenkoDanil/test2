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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'index']);

Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('admin/authors', \App\Http\Controllers\Admin\AuthorController::class);
    Route::resource('admin/books', \App\Http\Controllers\Admin\BookController::class);
});


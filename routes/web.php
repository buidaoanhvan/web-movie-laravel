<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');

Route::get('/phim/{id}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/theloai/{theloai}', [MoviesController::class, 'showTheLoai'])->name('movies.showTheLoai');

Auth::routes(['register' => false]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::post('/admin/addmovie', [AdminController::class, 'addphim'])->name('admin.addphim');

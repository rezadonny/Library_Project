<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return view('home.index'); /*menampilkan halaman utama /home/index.blade.php 
}); */

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [AdminController::class, 'index']);   /* link untuk mengarahkan ke halaman berdasarkan controller AdminController */




Route::get('/category_page', [AdminController::class, 'category_page']);

Route::post('/add_category', [AdminController::class, 'add_category']);

<?php

use App\Http\Controllers\Admin\PengelolaanController;
use App\Http\Controllers\Admin\TanamanController;
use App\Http\Controllers\Admin\DokumenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\DokumentasiController;
use App\Http\Controllers\Client\StatistikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Client\PemanfaatanController;
use Illuminate\Support\Facades\Route;


// // Home
Route::get('/', HomeController::class)->name('home');
Route::get('/pemanfaatan', PemanfaatanController::class)->name('pemanfaatan');
Route::get('/statistik', StatistikController::class)->name('statistik');
Route::get('/dokumentasi', DokumentasiController::class)->name('dokumentasi');


// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::prefix('/admin')->middleware('auth')->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('tanaman', TanamanController::class);
    Route::resource('pengelolaan', PengelolaanController::class);
    Route::resource('dokumentasi', DokumenController::class);
});


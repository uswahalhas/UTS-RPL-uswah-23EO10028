<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LapanganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama (gunakan controller agar bisa kirim data lapangan)
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Lapangan (bisa dibuka tanpa login)
Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');
Route::get('/lapangan/{id}', [LapanganController::class, 'show'])->name('lapangan.show');

// Booking (hanya untuk user yang login)
Route::middleware('auth')->group(function () {
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
    Route::put('/booking/{booking}/update', [BookingController::class, 'update'])->name('booking.update');
    Route::delete('/booking/{booking}/destroy', [BookingController::class, 'destroy'])->name('booking.destroy');
});

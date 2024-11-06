<?php
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
Route::put('/booking/{booking}/update', [BookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/{booking}/destroy', [BookingController::class, 'destroy'])->name('booking.destroy');
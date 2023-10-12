<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StaffController;

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

Route::post('/postBooking', [BookingController::class, 'submitBooking']);

Route::get('/booking', [BookingController::class, 'viewBooking']);

Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');

Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');

Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');

Route::get('/staff/{id}/show', [StaffController::class, 'show'])->name('staff.show');

Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');

Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');

Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
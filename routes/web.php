<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\RoomController;

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

#Receptionist
Route::get('/receptionist', [BookingController::class, 'showRecepDash'])->name('receptionist.index');
Route::post('/receptionist/check-availability', [BookingController::class, 'roomAvailable'])->name('receptionist.roomAvailable');
Route::post('/booking/{roomId}', [BookingController::class, 'showBookingForm'])->name('receptionist.booking');
Route::resource('/checkin', CheckInController::class);
Route::resource('/checkout', CheckOutController::class);
Route::get('/check-in/{roomId}', [CheckInController::class, 'checkInRoom'])->name('check-in-room');
Route::get('/check-out/{roomId}', [CheckOutController::class, 'checkOutRoom'])->name('check-out-room');

#HRD
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/{id}/show', [StaffController::class, 'show'])->name('staff.show');
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

#Room Service / House Keeper
Route::get('/reports' , [ReportController::class, 'showForm'])->name('room.report');
Route::post('/reports' , [ReportController::class, 'submitReport'])->name('submit.form');
Route::get('/rooms', [RoomController::class, 'index'])->name('room.index');
Route::get('/rooms/{id}', [RoomController::class, 'update_status'])->name('room.update');

// Route::get('/checkinout', 'CheckInOutController@index');
//Route::resource('/checkinout', [CheckInOutController::class, 'index']);

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('login');
})->name('home')->middleware('auth');

#Receptionist
Route::middleware(['auth', 'only-recept'])->group(function() {
    Route::get('/receptionist', [BookingController::class, 'showRecepDash'])->name('receptionist.index');
    Route::post('/receptionist/check-availability', [BookingController::class, 'roomAvailable'])->name('receptionist.roomAvailable');
    Route::post('/receptionist/booking/{roomId}', [BookingController::class, 'storeGuest'])->name('receptionist.guest.store');
    Route::resource('/checkin', CheckInController::class);
    Route::resource('/checkout', CheckOutController::class);
    Route::get('/check-in/{roomId}', [CheckInController::class, 'checkInRoom'])->name('check-in-room');
    Route::post('/checkin', [CheckInController::class, 'todaycheckin'])->name('receptionist.todaycheckin');
    Route::get('/check-out/{roomId}', [CheckOutController::class, 'checkOutRoom'])->name('check-out-room');
    Route::get('/booking/{id}/{startDate}/{endDate}', [GuestController::class, 'index'])->name('booking.index');
    Route::post('/booking/{id}/{startDate}/{endDate}', [GuestController::class, 'store'])->name('booking.add');
    Route::get('/guest', [GuestController::class, 'show'])->name('guest.show');
});

#HRD
Route::middleware(['auth', 'only-hrd'])->group(function(){
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/{id}/show', [StaffController::class, 'show'])->name('staff.show');
    Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
});

#Room Service / House Keeper
Route::middleware(['auth', 'only-roomservice'])->group(function() {
    Route::get('/rooms/reports/{id}' , [ReportController::class, 'showForm'])->name('room.report');
    Route::post('/rooms/reports/{id}' , [ReportController::class, 'submitReport'])->name('submit.form');
    Route::get('/rooms', [RoomController::class, 'index'])->name('room.index');
    Route::post('/rooms/{id}', [RoomController::class, 'update_status'])->name('room.update');
    Route::get('/rooms/reported', [RoomController::class, 'report_page'])->name('room.reported');
});

#Login System
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

#Admin
Route::middleware(['auth', 'only-admin'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/admin/addUser', [AdminController::class, 'add'])->name('admin.addUser');
    Route::delete('/admin/deleteUser/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/admin/viewStaff', [AdminController::class, 'viewStaff'])->name('admin.viewStaff');
    Route::get('/admin/viewRooms', [AdminController::class, 'viewRooms'])->name('admin.viewRooms');
    Route::get('/admin/viewUsers', [AdminController::class, 'viewUsers'])->name('admin.viewUsers');
    Route::get('/admin/HK', [AdminController::class, 'HK'])->name('admin.HK');
    Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
    Route::get('/admin/viewCheckIn', [AdminController::class, 'viewCheckIn'])->name('admin.viewCheckIn');
    Route::get('/admin/viewCheckOut', [AdminController::class, 'viewCheckOut'])->name('admin.viewCheckOut');
    Route::post('/admin/viewCheckIn', [CheckInController::class, 'todaycheckin'])->name('admin.todaycheckin');

});

Route::get('/users', [UserController::class, 'index'])->name('users.index');


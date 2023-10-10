<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Fungsi controller untuk menerima input booking_date, start_date, dan finish_date
    public function submitBooking(Request $request)
{
    try {
        // Ambil data input dari pengguna
        $bookingDate = $request->input('booking_date');
        $startDate = $request->input('start_date');
        $finishDate = $request->input('finish_date');
        $idGuest = $request->input('id_guest');
        $idRoom = $request->input('id_room');

        // Validasi data jika diperlukan
        if ($bookingDate >= $startDate || $bookingDate >= $finishDate) {
            return response()->json(['error' => 'Tanggal pemesanan harus sebelum tanggal mulai dan tanggal selesai.']);
        }

        // Simpan data ke database menggunakan model Eloquent
        $booking = new Booking();
        $booking->booking_date = $bookingDate;
        $booking->start_date = $startDate;
        $booking->finish_date = $finishDate;
        $booking->id_guest = $idGuest;
        $booking->id_room = $idRoom;
        $booking->save();

        // Beri respons berhasil kepada pengguna
        return response()->json(['success' => 'Pemesanan berhasil disimpan.']);

    } catch (\Exception $e) {
        // Tangani kesalahan jika ada
        return response()->json(['error' => $e->getMessage()]);
    }
}
    public function viewBooking(Request $request)
    {
        return view('showForm');
    }
}
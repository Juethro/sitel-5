<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        return view('receptionist.index');
    }

    public function roomAvailable(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Cari room yang tidak tersedia berdasarkan waktu
        $unavailableRoomIds = booking::where(function ($query) use ($start_date, $end_date) {
            $query->where('start_date', '<=', $end_date)
                  ->where('finish_date', '>', $start_date);
        })->pluck('id_room')->unique();
        
        // Kurangi room yang tersedia dengan
        $allRooms = room::all();
        $availableRooms = $allRooms->whereNotIn('id', $unavailableRoomIds);

        return view('receptionist.index', compact('availableRooms'));
    }

    // public function checkAvailability(Request $request)
    // {
    //     $startDate = $request->input('start_date');
    //     $endDate = $request->input('end_date');

    //     // Query pencarian kamar yang tersedia
    //     $availableRooms = Booking::where(function ($query) use ($startDate, $endDate) {
    //         $query->where('start_date', '>', $endDate)
    //               ->orWhere('finish_date', '<', $startDate);
    //     })->orWhereNull('id_room')->get();

    //     return view('available-rooms', compact('availableRooms'));
    // }
}

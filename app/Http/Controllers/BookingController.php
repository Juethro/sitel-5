<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        return view('booking');
    }

    public function checkAvailability(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Query pencarian kamar yang tersedia
        $availableRooms = Booking::where(function ($query) use ($startDate, $endDate) {
            $query->where('start_date', '>', $endDate)
                  ->orWhere('finish_date', '<', $startDate);
        })->orWhereNull('id_room')->get();

        return view('available-rooms', compact('availableRooms'));
    }
}

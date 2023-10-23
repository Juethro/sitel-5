<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\guest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(string $id, string $startDate, string $endDate)
    {
        return view('receptionist.booking', compact('id', 'startDate', 'endDate'));
    }

    public function show(){
        $guests = Guest::all();
        return view('receptionist.guest', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request, string $id, string $startDate, string $endDate)
    {
        // Store guest data
        $data = $request->validate([
            'guest_name' => 'required',
            'guest_phone' => 'required',
            'guest_address' => 'required',
        ]);
        $guest = Guest::create($data);

        // Store Booking Data
        $id_guest = $guest->id_guest;
        $now_date = Carbon::now();
        $now_date_formated = $now_date->format('Y-m-d');
        $carbonStartDate = Carbon::parse($startDate);
        $carbonEndDate = Carbon::parse($endDate);
        $selisihHari = $carbonStartDate->diffInDays($carbonEndDate);
        $pricePerNight = DB::table('rooms')
                        ->join('roomtypes', 'rooms.id_roomtype', '=', 'roomtypes.id_roomtype')
                        ->where('rooms.id_room', $id)
                        ->pluck('roomtypes.price_per_night');

        $totalPrice = $selisihHari * $pricePerNight[0];
        
        $booking_data = [
            'booking_date' => $now_date_formated,
            'start_date' => $startDate,
            'finish_date' => $endDate,
            'total_pay' => $totalPrice,
            'id_guest' => $id_guest,
            'id_room' => $id
        ];
        booking::create($booking_data);

        return redirect()->route('receptionist.index');
        // return $booking_data;
    }
}

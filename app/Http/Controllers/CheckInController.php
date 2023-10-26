<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckInController extends Controller
{
    public function index()
    {
        $bookings = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('rooms.status', '=', 'x')
            ->get();
        return view('receptionist.checkIn', compact('bookings'));
    }

    public function todaycheckin(Request $request)
    {
        $todaydate = $request->input('today_date');

        $bookings = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('bookings.start_date', $todaydate)
            ->get();

        return view('receptionist.checkIn', compact('bookings'));
    }

    public function checkInRoom($roomId)
    {
        // Ubah status kamar menjadi 'checkined' berdasarkan $roomId
        DB::table('rooms')->where('id_room', $roomId)->update(['status' => 'checkined']);
        //return redirect()->view('index');

        $bookings = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('rooms.status', '=', 'booked')
            ->get();

        return view('receptionist.checkIn', compact('bookings'))->with('success', 'Room checked in successfully');
    }
}
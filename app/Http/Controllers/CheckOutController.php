<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function index()
    {
        $checkouttable = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('rooms.status', '=', 'checkined')
            ->get();
        return view('receptionist.checkOut', compact('checkouttable'));
    }
    
    public function checkOutRoom($roomId)
    {
        DB::table('rooms')->where('id_room', $roomId)->update(['status' => 'checkouted']);

        $checkouttable = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('rooms.status', '=', 'checkined')
            ->get();

        return view('receptionist.checkOut', compact('checkouttable'))->with('success', 'Room checked out successfully');
    }
}

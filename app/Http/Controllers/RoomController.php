<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index()
    {
        $data = DB::table('rooms')
            ->join('bookings', 'rooms.id_room', '=', 'bookings.id_room')
            ->where('status', 'checkouted')
            ->get();

        return view('RoomService.index', compact('data'));
    }

    public function update_status(string $id)
    {
        $room = DB::table('rooms')
                ->select('*')
                ->where('id_room', $id)
                ->update(['status'=> 'ready']);

        return redirect()->route('room.index');
    }

    public function report_page(){
        $reported = DB::table('reports')
                ->join('rooms', 'reports.id_room', '=', 'rooms.id_room')
                ->select('rooms.id_room','reports.id_report', 'rooms.room_number', 'reports.description', 'rooms.status')
                ->where('status', 'problem')
                ->get();

        return view('RoomService.reportpage', compact('reported'));
    }

}
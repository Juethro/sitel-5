<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\staff;
use App\Models\room;
use App\Models\roomtype;
use App\Models\user;
use App\Models\booking;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function register(){
        return view('admin.register');
    }

    public function viewStaff()
    {
        $staff = staff::orderBy('id_staff')->get();

        return view('admin.viewStaff', compact('staff')); //display list
    }

    public function viewUsers()
    {
        $users = user::orderBy('id')->get();

        return view('admin.viewUsers', compact('users')); //display list

    }

    public function viewRooms()
    {
        $rooms = DB::table('rooms')
            ->select('rooms.id_room','rooms.room_number','rooms.status',
                     'roomtypes.roomtype_name')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->get();

        return view('admin.viewRooms', compact('rooms')); //display list

    }

    public function viewCheckIn()
    {
        $bookings = DB::table('bookings')
            ->select('bookings.id_booking','bookings.booking_date','bookings.total_pay',
                     'bookings.start_date', 'bookings.finish_date', 'rooms.id_room',
                     'guests.guest_name','roomtypes.roomtype_name', 'rooms.status')
            ->join('guests', 'guests.id_guest', '=', 'bookings.id_guest')
            ->join('rooms', 'rooms.id_room', '=', 'bookings.id_room')
            ->join('roomtypes', 'roomtypes.id_roomtype', '=', 'rooms.id_roomtype')
            ->where('rooms.status', '=', 'booked')
            ->get();

        return view('admin.viewCheckIn', compact('bookings'));
    }

    public function viewCheckOut()
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

        return view('admin.viewCheckOut', compact('checkouttable'));
    }

    public function HK()
    {
        $data = DB::table('rooms')
            ->join('bookings', 'rooms.id_room', '=', 'bookings.id_room')
            ->where('status', 'checkouted')
            ->get();

        return view('admin.HK', compact('data'));
    }

    public function add(Request $request){

        $request = $request->validate([
            'username' => 'required|unique:users',
            'passw' => 'required',
            'role' => 'required'
        ]);

        $users = new user();
        $users->username = $request['username'];
        $users->password = Hash::make($request['password']);
        $users->role = $request['role'];
        $users->save();

        return redirect()->route('admin.viewUsers');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(string $id)
    {
        return view('receptionist.booking', compact('id'));
    }

    public function show(){
        $guests = Guest::all();
        return view('receptionist.guest', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'guest_name' => 'required',
            'guest_phone' => 'required',
            'guest_address' => 'required',
        ]);

        Guest::create($data);

        return redirect('/receptionist')->with('success', 'Data tamu berhasil disimpan!');
    }
}

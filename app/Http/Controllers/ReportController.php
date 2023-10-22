<?php

namespace App\Http\Controllers;

use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    // Menampilkan formulir untuk laporan keluhan pelanggan
    public function showForm(string $id)
    {
        return view('RoomService.report', compact('id'));
    }

    // Menyimpan laporan keluhan
    public function submitReport(Request $request, string $id_room)
    {
        try {
            $data = $request->validate([
                'description' => 'required'
            ]);

            // Simpan data ke database menggunakan model Eloquent
            $report = new report();
            $report->description = $data['description'];
            $report->id_room = $id_room; 
            $report->save(); 

            // Ganti status kamar
            $room = DB::table('rooms')
                ->select('*')
                ->where('id_room', $id_room)
                ->update(['status'=> 'problem']);

            return redirect()->route('room.index')->with('message' , 'Laporan Keluhan berhasil disimpan');

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
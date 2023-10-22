<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Menampilkan formulir untuk laporan keluhan pelanggan
    public function showForm()
    {
        return view('RoomService.report');
    }

    // Menyimpan laporan keluhan
    public function submitReport(Request $request)
    {
        try {
            $data = $request->validate([
                'description' => 'required'
            ]);

            // Simpan data ke database menggunakan model Eloquent
            $report = new Report();
            $report->description = $data['description'];
            $report->id_room = 1; 
            $report->save(); 

            return redirect()->route('room.report')->with('message' , 'Laporan Keluhan berhasil disimpan');

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
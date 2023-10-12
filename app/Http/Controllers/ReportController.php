<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Menampilkan formulir untuk laporan keluhan pelanggan
    public function showForm()
    {
        return view('report');
    }

    // Menyimpan laporan keluhan
    public function submitReport(Request $request)
    {
        try {
            $description = $request->input('description');

            $data = $request->validate([
                'description' => 'required'
            ]);


            // Validasi data jika diperlukan

            // Simpan data ke database menggunakan model Eloquent
            $report = new Report();
            $report->description = $data['description'];
            $report->id_room = 1; 
            $report->save(); 

            // CARA YANG KE-3
            $data_insert =[
                'description' => $data['description'],
                'id_room' => 1
            ];

            return redirect()->route('show.form')->with('message' , 'Laporan Keluhan berhasil disimpan');

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
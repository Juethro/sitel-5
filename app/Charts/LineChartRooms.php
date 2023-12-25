<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB; 
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LineChartRooms
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $single = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Month', DB::raw("SUM(`LoS`) as total_payment"))
        ->where('Room Type', 'Single Room') 
        ->groupBy('Month')
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($single as $row) {
            $labels[] = $row->{'Month'};
            $datasets[] = $row->total_payment;}
        $singleRooms = array_map('intval', $datasets); 

        $junior = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Month', DB::raw("SUM(`LoS`) as total_payment"))
        ->where('Room Type', 'Junior Suite Room') 
        ->groupBy('Month')
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($junior as $row) {
            $labels[] = $row->{'Month'};
            $datasets[] = $row->total_payment;}
        $juniorRooms = array_map('intval', $datasets); 

        $deluxe = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Month', DB::raw("SUM(`LoS`) as total_payment"))
        ->where('Room Type', 'Deluxe Room') 
        ->groupBy('Month')
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($deluxe as $row) {
            $labels[] = $row->{'Month'};
            $datasets[] = $row->total_payment;}
        $deluxeRooms = array_map('intval', $datasets); 

        $pres = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Month', DB::raw("SUM(`LoS`) as total_payment"))
        ->where('Room Type', 'President Room') 
        ->groupBy('Month')
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($pres as $row) {
            $labels[] = $row->{'Month'};
            $datasets[] = $row->total_payment;}
        $presRooms = array_map('intval', $datasets); 
        
        $all = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Month', DB::raw("SUM(`LoS`) as total_payment"))
        ->groupBy('Month')
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($all as $row) {
            $labels[] = $row->{'Month'};
            $datasets[] = $row->total_payment;}
        $allRooms = array_map('intval', $datasets); 

        return $this->chart->lineChart()
            ->setTitle('Tren Total Penjualan Unit Kamar Tahun 2023')
            ->addData('Sigle Room', [$singleRooms[4], $singleRooms[3], $singleRooms[7], $singleRooms[1], 
                                     $singleRooms[8], $singleRooms[6], $singleRooms[5], $singleRooms[0], 
                                     $singleRooms[11], $singleRooms[10], $singleRooms[9], $singleRooms[2]])
            ->addData('Junior Suite Room', [$juniorRooms[4], $juniorRooms[3], $juniorRooms[7], $juniorRooms[1], 
                                            $juniorRooms[8], $juniorRooms[6], $juniorRooms[5], $juniorRooms[0], 
                                            $juniorRooms[11], $juniorRooms[10], $juniorRooms[9], $juniorRooms[2]])
            ->addData('Deluxe Room', [$deluxeRooms[4], $deluxeRooms[3], $deluxeRooms[7], $deluxeRooms[1], 
                                      $deluxeRooms[8], $deluxeRooms[6], $deluxeRooms[5], $deluxeRooms[0], 
                                      $deluxeRooms[11], $deluxeRooms[10], $deluxeRooms[9], $deluxeRooms[2]])
            ->addData('President Room', [$presRooms[4], $presRooms[3], $presRooms[7], $presRooms[1], 
                                         $presRooms[8], $presRooms[6], $presRooms[5], $presRooms[0], 
                                         $presRooms[11], $presRooms[10], $presRooms[9], $presRooms[2]])
            ->addData('All Rooms', [$allRooms[4], $allRooms[3], $allRooms[7], $allRooms[1], 
                                    $allRooms[8], $allRooms[6], $allRooms[5], $allRooms[0], 
                                    $allRooms[11], $allRooms[10], $allRooms[9], $allRooms[2]])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}

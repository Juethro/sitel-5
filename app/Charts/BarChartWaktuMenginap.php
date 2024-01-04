<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB; 
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartWaktuMenginap
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        # AVERAGE
        $query = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Room Type', DB::raw('AVG(LoS) as average_los'))
        ->groupBy('Room Type')  
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($query as $row) {
            $labels[] = $row->{'Room Type'};
            $datasets[] = $row->average_los;}
        $avg = array_map('intval', $datasets); 
        $formattedLabels = array_map('strval', $labels); 
        
        # MIN
        $query = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Room Type', DB::raw('MIN(LoS) as average_los'))
        ->groupBy('Room Type')  
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($query as $row) {
            $labels[] = $row->{'Room Type'};
            $datasets[] = $row->average_los;}
        $min = array_map('intval', $datasets); 
        $formattedLabels = array_map('strval', $labels); 

        # MAX
        $query = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Room Type', DB::raw('MAX(LoS) as average_los'))
        ->groupBy('Room Type')  
        ->get();
        $labels = [];
        $datasets = [];
        foreach ($query as $row) {
            $labels[] = $row->{'Room Type'};
            $datasets[] = $row->average_los;}
        $max = array_map('intval', $datasets); 
        $formattedLabels = array_map('strval', $labels); 

        return $this->chart->barChart()
        ->setTitle('Distribusi Lama Waktu Menginap Setiap Tipe Kamar Tahun 2023')
        ->addData('Lama Waktu Menginap Tercepat (Hari)', [$min[0], $min[1], $min[2], $min[3]])
        ->addData('Lama Waktu Menginap Rata-Rata (Hari)', [$avg[0], $avg[1], $avg[2], $avg[3]])
        ->addData('Lama Waktu Menginap Terlama (Hari)', [$max[0], $max[1], $max[2], $max[3]])
        ->setXAxis($formattedLabels);
        }
}

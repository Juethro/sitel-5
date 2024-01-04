<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB; 
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartGuestCity
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {        
        $all = DB::connection('mysql_second')->table('fact_transcation')
        ->select('City', DB::raw("SUM(`LoS`) as total_payment"))
        ->groupBy('City')
        ->orderByDesc('total_payment') 
        ->limit(10)
        ->get();

    //     $labels = [];
    //     $datasets = [];

    //     foreach ($all as $row) {
    //         $labels[] = $row->{'City'};
    //         $datasets[] = $row->total_payment;}
            
    //     $data = array_map('intval', $datasets); 
    //     $label = array_map('intval', $labels); 

    //     return $this->chart->barChart()
    //     ->setTitle('Top 10 Kota Asal Customer Yang Paling Sering Menginap Tahun 2023')
    //     ->addData('kota asal',[$data])
    //     ->setXAxis([$label]);
    // }
            $cityLabels = []; 
            $losDatasets = [];

            foreach ($all as $row) {
                $cityLabels[] = $row->City;  
                $losDatasets[] = $row->total_payment;
                }

            $losDatasets = array_map('intval', $losDatasets);
            $cityLabels = array_map('strval', $cityLabels);

            return $this->chart->barChart()
            ->setTitle('Top 10 Kota Asal Customer Yang Paling Sering Menginap Tahun 2023')
            ->addData('Total Kamar Terjual', $losDatasets) 
            ->setColors(['#001aff'])
            ->setXAxis($cityLabels);
            }
}

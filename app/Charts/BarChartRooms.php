<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB;  
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartRooms
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $data = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Room Type', DB::raw('SUM(LoS) as total_terjual'))
        ->groupBy('Room Type')
        ->orderByDesc('total_terjual')
        ->get();

    $labels = [];
    $datasets = [];

    foreach ($data as $row) {
        $labels[] = $row->{'Room Type'};
        $datasets[] = $row->total_terjual;
    }

    $formattedDatasets = array_map('intval', $datasets); 
    $formattedLabels = array_map('strval', $labels); 

        return $this->chart->horizontalBarChart()
        ->setTitle('Penjuan Setiap Tipe Kamar Tahun 2023')
        ->addData('Total Kamar Terjual', [$formattedDatasets[0], $formattedDatasets[1], $formattedDatasets[2], $formattedDatasets[3]])
        ->setColors(['#7700ff'])
        ->setXAxis($formattedLabels);
        
        // return $this->chart->barChart()
        //     ->setTitle('Penjuan Setiap Tipe Kamar Tahun 2023')
        //     ->addData('Deluxe Room', [$formattedDatasets[0]])
        //     ->addData('Junior Suite Room', [$formattedDatasets[1]])
        //     ->addData('President Room', [$formattedDatasets[2]])
        //     ->addData('Single Room', [$formattedDatasets[3]])
        //     ->setXAxis([' ']);
    }
}

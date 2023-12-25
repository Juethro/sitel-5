<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB;  
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PieChartRooms
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $data = DB::connection('mysql_second')->table('fact_transcation')
            ->select('Room Type', DB::raw('SUM(LoS) as total_terjual'))
            ->groupBy('Room Type')
            ->get();

        $labels = [];
        $datasets = [];
    
        foreach ($data as $row) {
            $labels[] = $row->{'Room Type'};
            $datasets[] = $row->total_terjual;
        }

        $formattedDatasets = array_map('intval', $datasets); 

        return $this->chart->pieChart()
            ->setTitle('Tren Total Penjualan Unit Kamar Tahun 2023')
                ->addData($formattedDatasets)
            ->setLabels($labels);
    }
}

<?php

namespace App\Charts;

use App\Models\fact;
use Illuminate\Support\Facades\DB; 
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartTopGuest
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {        
        $all = DB::connection('mysql_second')->table('fact_transcation')
        ->select('Nama Tamu', DB::raw("SUM(`Total Payment`) as total_payment"))
        ->groupBy('Nama Tamu')
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
            $GuestName = []; 
            $losDatasets = [];

            foreach ($all as $row) {
                $GuestName[] = $row->{'Nama Tamu'};  
                $losDatasets[] = $row->total_payment;
                }

            $losDatasets = array_map('intval', $losDatasets);
            $Name = array_map('strval', $GuestName);
            
            $data = array_map(function($item) {
                return $item/1000000;
              }, $losDatasets);

            return $this->chart->HorizontalBarChart()
            ->setTitle('Top 10 Customer di Tahun 2023')
            ->addData('Total Transaksi (Juta Rupiah)', $data) 
            ->setColors(['#fa0505'])
            ->setXAxis($Name);
            }
}

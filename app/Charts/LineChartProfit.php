<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class LineChartProfit
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Physical sales',[90, 50, 86, 45, 31, 42, 74, 67, 91, 95, 94, 71]            )
            ->addData('Digital sales', [47, 86, 76, 69, 77, 50, 63, 41, 52, 78, 79, 47]            )            
            ->addData('Physical sales 2', [100, 85, 91, 80, 57, 82, 79, 89, 75, 86, 44, 89]            )
            ->addData('Digital sales 2', [41, 63, 56, 35, 48, 93, 41, 41, 59, 97, 87, 100]            )
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}

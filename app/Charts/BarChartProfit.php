<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartProfit
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Penjuan Setiap Tipe Kamar Perbulan Tahun 2023')
            ->addData('Sigle Room', [3, 6, 10, 9, 12, 11, 8, 10, 12, 12, 7, 12])
            ->addData('Junior Suite Room', [6, 4, 3, 8, 8, 5, 9, 9, 8, 5, 5, 3]            )
            ->addData('Deluxe Room', [6, 3, 6, 11, 6, 5, 7, 5, 6, 4, 5, 8]           )
            ->addData('President Room', [7, 7, 10, 12, 5, 6, 3, 11, 4, 5, 5, 12]            )
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}

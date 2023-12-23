<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChartRooms
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
            ->addData('Sigle Room', [6, 9, 3, 4, 10, 8])
            ->addData('Junior Suite Room', [7, 3, 8, 2, 6, 4])
            ->addData('Deluxe Room', [9, 1, 2, 6, 1, 7])
            ->addData('President Room', [1, 4, 2, 8, 4, 3])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}

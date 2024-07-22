<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Item;

class HealthChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Health';

    protected function getData(): array
    {

        // Total count of health services
        $totalDentist = Item::where('category_name', 'Dentist')->count();
        $totalGeneralMedicine = Item::where('category_name', 'General Medicine')->count();
        $totalGynecologist = Item::where('category_name', 'Gynecologist')->count();
        $totalNeurologist = Item::where('category_name', 'Neurologist')->count();
        $totalOphtalmologist = Item::where('category_name', 'Ophtalmologist')->count();
        $totalPhysiotherapist = Item::where('category_name', 'Physiotherapist')->count();
        $totalPediatrician = Item::where('category_name', 'Pediatrician')->count();
        $totaRheumatologist = Item::where('category_name', 'Rheumatologist')->count();
        $totaTraumatologist = Item::where('category_name', 'Traumatologist')->count();
        return [
            
            'datasets' => [
                [
                    'label' => 'Health',
                    'data' => [
                        $totalDentist,
                        $totalGynecologist,
                        $totalNeurologist,
                        $totalOphtalmologist,
                        $totalPhysiotherapist,
                        $totalPediatrician,
                        $totaRheumatologist,
                        $totaTraumatologist,
                    ],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    'borderColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                        ],
                    'borderWidth' => 1
                ],
            ],
            'labels' => ['Dentist', 'General medicine', 'Gynecologist', 'Neurologist', 'Ophtalmologist', 'Physiotherapist', 'Mental health', 'Pediatrician', 'Rheumatologist', 'Traumatologist'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
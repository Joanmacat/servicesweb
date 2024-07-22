<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Item;

class CompaniesChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Companies';

    protected function getData(): array

    {
        // Total counting of categories variables.
        $totalAccountant = Item::where('category_name', 'Accountant')->count();
        $totalAdvocacy = Item::where('category_name', 'Advocacy')->count();
        $totalBanking = Item::where('category_name', 'Banking')->count();
        $totalBusiness = Item::where('category_name', 'Business')->count();
        $totalConsultancy = Item::where('category_name', 'Consultancy')->count();
        $totalConcierge = Item::where('category_name', 'Concierge')->count();
        $totalFamilyOffice = Item::where('category_name', 'Family Office')->count();
        $totalInsurance = Item::where('category_name', 'Insurance')->count();
        $totalOnboarding = Item::where('category_name', 'Onboarding')->count();
        $totalRealEstate = Item::where('category_name', 'Real Estate')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Companies',
                    'data' => [$totalAccountant, 
                        $totalAdvocacy,
                        $totalBanking,
                        $totalBusiness,
                        $totalConsultancy,
                        $totalConcierge,
                        $totalFamilyOffice,
                        $totalInsurance,
                        $totalOnboarding,
                        $totalRealEstate],
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
            'labels' => ['Accountant', 'Advocacy', 'Banking', 'Business', 'Consultancy', 'Concierge', 'Family Office', 'Insurance', 'Onboarding', 'Real Estate'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Item;
use App\Models\User;

class ItemsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        $totalItems = Item::count();
        $totalUsers = User::count();

        return [
            Stat::make('Total items', $totalItems)
                ->description('Total services added')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Total users', $totalUsers)
                ->description('Total users added')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger')
        ];
    }
}

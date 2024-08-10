<?php

namespace App\Filament\Widgets;

use App\Models\Jami;
use App\Models\Kurti;
use App\Models\Waskat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(__('Jami'), Jami::query()->count())
                ->description(__('All Jami from the database'))
                ->descriptionIcon('icon-jami')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make(__('Waskat'), Waskat::query()->count())
                ->description(__('All waskat from the database'))
                ->descriptionIcon('icon-waistcoat')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make(__('Kurti'), Kurti::query()->count())
                ->description(__('All Kurti from the database'))
                ->descriptionIcon('icon-kurti')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}

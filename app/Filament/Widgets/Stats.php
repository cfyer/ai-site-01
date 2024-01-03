<?php

namespace App\Filament\Widgets;

use App\Services\Statistics\ChartData;
use Carbon\Carbon;
use App\Models\{Payment, User};
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Shetabit\Visitor\Models\Visit;

class Stats extends BaseWidget
{
    protected static ?int $sort = 0;
    protected function getStats(): array
    {
        return [
            Stat::make('Unique views', Visit::query()->distinct('ip')->count())
                ->icon('heroicon-s-eye')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->description(Visit::query()->distinct('ip')->whereDate('created_at', Carbon::today())->count() .' today')
                ->color('warning')
                ->chart(ChartData::calculate(new Visit())),

            Stat::make('Users', User::count())
                ->icon('heroicon-s-user')
                ->description(User::whereDate('created_at', Carbon::today())->count() . ' today')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart(ChartData::calculate(new User())),

            Stat::make('Payments', Payment::count())
                ->icon('heroicon-o-credit-card')
                ->description(Payment::query()->whereDate('created_at', Carbon::today())->count() . ' today')
                ->color('info')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart(ChartData::calculate(new Payment()))
        ];
    }
}

<?php

namespace App\Services\Statistics;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ChartData
{
    public static function calculate(Model $model, int $days = 7): array
    {
        $startDate = Carbon::now()->subDays($days);
        $endDate = Carbon::now();

        $counts = [];

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {

            $count = $model::query()->whereDate('created_at', $date->toDateString())->count();

            $counts[] = $count;
        }

        return $counts;
    }
}

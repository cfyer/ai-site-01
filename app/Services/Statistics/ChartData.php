<?php

namespace App\Services\Statistics;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ChartData
{
    public static function calculate(Model $model, int $days = 7): array
    {
        $counts = [];

        for ($i = 0; $i < $days; $i++) {
            $date = Carbon::now()->copy()->subDays($i)->toDateString();

            $count = $model::query()->whereDate('created_at', $date)->count();

            $counts[] = $count;
        }

        return $counts;
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPayments extends BaseWidget
{
    protected static ?int $sort = 1 ;
    protected int | string | array $columnSpan = 'full';
    protected function getTableQuery(): Builder
    {
        return Payment::query()->where('status', 'finished')->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')->searchable(),
            Tables\Columns\TextColumn::make('status'),
            Tables\Columns\TextColumn::make('plan.label'),
            Tables\Columns\TextColumn::make('NP_ID')->label('Payment id')->searchable(),
        ];
    }
}

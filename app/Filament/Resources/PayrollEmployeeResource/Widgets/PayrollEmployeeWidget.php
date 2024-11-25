<?php

namespace App\Filament\Resources\PayrollEmployeeResource\Widgets;

use App\Models\Payrolls;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PayrollEmployeeWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Paid', 'paid_at')
            ->icon('heroicon-o-calendar')
            ->value(Payrolls::where('user_id', auth()->id())->count())
            ->description('Total number of times you have been paid.'),

            Stat::make('Total Salary', 'salary')
                ->value(Payrolls::where('user_id', auth()->id())->sum('salary'))
                ->icon('heroicon-o-banknotes')
                ->description('Your Total salary paid to you.'),
         
                Stat::make('Highest Salary', 'salary')
                ->value(Payrolls::where('user_id', auth()->id())->max('salary') ?? 0)
                ->icon('heroicon-o-chart-bar')
                ->description('Your highest salary received.'),
        ];
    }
}

<?php

namespace App\Filament\Resources\AttendanceemployeeResource\Widgets;

use App\Models\Attendances;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AttendanceEmployeeWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           
            Stat::make('My Absent', '')
            ->value(Attendances::where('user_id', auth()->user()->id)->where('status', 'absent')->count())
            ->icon('heroicon-o-user'),
            
            Stat::make('My Present', '')
            ->value(Attendances::where('user_id', auth()->user()->id)->where('status', 'present')->count())
                ->icon('heroicon-o-user'),

            Stat::make('My Late', '')
            ->value(Attendances::where('user_id', auth()->user()->id)->where('status', 'late')->count())
                ->icon('heroicon-o-user'),

            Stat::make('My Early', '')
            ->value(Attendances::where('user_id', auth()->user()->id)->where('status', 'early')->count())
                ->icon('heroicon-o-user'),


        ];
    }
}

<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserWidget extends BaseWidget
{
    protected function getStats(): array
    {
            $userId = auth()->id();

            return [
                Stat::make('Total Users', 'id')
                ->value(User::count())
                ->icon('heroicon-o-users')
                ->description('Total number of users.'),

            Stat::make('Users by Department', 'department_id')
                ->value(User::select('department_id')->distinct()->count())
                ->icon('heroicon-o-building-office')
                ->description('Number of departments with users.'),

            Stat::make('Users by Position', 'position_id')
                ->value(User::select('position_id')->distinct()->count())
                ->icon('heroicon-o-briefcase')
                ->description('Number of positions with users.'),
        ];
    }
}

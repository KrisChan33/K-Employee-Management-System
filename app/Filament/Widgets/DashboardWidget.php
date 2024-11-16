<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardWidget extends BaseWidget
{
    protected function getStats(): array
    {
        // using filters to not show the data when the date is not selected or not in the range
        $startDate = $this->filters['StartDate'] ?? null;
        $endDate = $this->filters['EndDate'] ?? null;
        $name = $this->filters['name'] ?? null;
        return [
            //Total Accounts Stat
            Stat::make(
                'Total Accounts',
                User::when(
                    $startDate,
                    fn ($query) => $query->whereDate('created_at', '>=', $startDate)
                )
                    ->when(
                        $endDate,
                        fn ($query) => $query->whereDate('created_at', '<=', $endDate)
                    )
                    ->when($name, fn ($query) => $query->where('name', $name))
                    // ->where('role_id', '!=', '1') // Exclude admin users
                    ->count()
            )
                ->description('Users')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17]),


                
            //total Departments Stats

            Stat::make(
                'Total Departments',
                Department::when(
                    $startDate,
                    fn ($query) => $query->whereDate('created_at', '>=', $startDate)
                )
                    ->when(
                        $endDate,
                        fn ($query) => $query->whereDate('created_at', '<=', $endDate)
                    )
                    ->when($name, fn ($query) => $query->where('name', $name))
                    ->count()
                    )
                    ->description('Departments')
                    ->descriptionIcon('heroicon-o-user-group')
                    ->color('info')
                    ->chart([7, 2, 10, 3, 15, 4, 17]),

                //total roles
                Stat::make(
                    'Total Positions',
                    Position::when(
                        $startDate,
                        fn ($query) => $query->whereDate('created_at', '>=', $startDate)
                    )
                        ->when(
                            $endDate,
                            fn ($query) => $query->whereDate('created_at', '<=', $endDate)
                        )
                        ->when($name, fn ($query) => $query->where('title', $name))
                        ->count()
                        )
                        ->description('Positions')
                        ->descriptionIcon('heroicon-o-user-group')
                        ->color('info')
                        ->chart([7, 2, 10, 3, 15, 4, 17]),

            ];
    }
    
    // public static function canView(): bool
    // {
    //     return auth()->user()->role->role == 'admin'; // || auth()->user()->role->role === 'employee';
    // }
}

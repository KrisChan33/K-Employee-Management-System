<?php

namespace App\Filament\Resources\AttendanceemployeeResource\Pages;

use App\Filament\Resources\AttendanceemployeeResource;
use App\Filament\Resources\AttendanceemployeeResource\Widgets\AttendanceEmployeeWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttendanceemployees extends ListRecords
{
    protected static string $resource = AttendanceemployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    
    protected function getHeaderWidgets(): array
    {
        return [
            AttendanceEmployeeWidget::make(),
        ];
    }
}

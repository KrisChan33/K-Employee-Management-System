<?php

namespace App\Filament\Resources\AttendanceemployeeResource\Pages;

use App\Filament\Resources\AttendanceemployeeResource;
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
}

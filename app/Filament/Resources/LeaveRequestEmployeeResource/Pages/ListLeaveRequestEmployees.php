<?php

namespace App\Filament\Resources\LeaveRequestEmployeeResource\Pages;

use App\Filament\Resources\LeaveRequestEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeaveRequestEmployees extends ListRecords
{
    protected static string $resource = LeaveRequestEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

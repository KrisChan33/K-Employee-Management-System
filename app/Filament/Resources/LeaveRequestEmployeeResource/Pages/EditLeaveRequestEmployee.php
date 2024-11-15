<?php

namespace App\Filament\Resources\LeaveRequestEmployeeResource\Pages;

use App\Filament\Resources\LeaveRequestEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeaveRequestEmployee extends EditRecord
{
    protected static string $resource = LeaveRequestEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PayrollEmployeeResource\Pages;

use App\Filament\Resources\PayrollEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayrollEmployee extends EditRecord
{
    protected static string $resource = PayrollEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

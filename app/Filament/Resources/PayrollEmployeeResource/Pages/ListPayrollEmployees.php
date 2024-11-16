<?php

namespace App\Filament\Resources\PayrollEmployeeResource\Pages;

use App\Filament\Resources\PayrollEmployeeResource;
use App\Filament\Resources\PayrollEmployeeResource\Widgets\PayrollEmployeeWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayrollEmployees extends ListRecords
{
    protected static string $resource = PayrollEmployeeResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PayrollEmployeeWidget::make(),
        ];
    }
}

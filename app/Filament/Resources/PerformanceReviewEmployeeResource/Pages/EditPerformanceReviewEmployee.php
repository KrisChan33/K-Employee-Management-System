<?php

namespace App\Filament\Resources\PerformanceReviewEmployeeResource\Pages;

use App\Filament\Resources\PerformanceReviewEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerformanceReviewEmployee extends EditRecord
{
    protected static string $resource = PerformanceReviewEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

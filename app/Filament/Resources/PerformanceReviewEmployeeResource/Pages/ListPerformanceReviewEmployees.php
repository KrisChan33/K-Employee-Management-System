<?php

namespace App\Filament\Resources\PerformanceReviewEmployeeResource\Pages;

use App\Filament\Resources\PerformanceReviewEmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerformanceReviewEmployees extends ListRecords
{
    protected static string $resource = PerformanceReviewEmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

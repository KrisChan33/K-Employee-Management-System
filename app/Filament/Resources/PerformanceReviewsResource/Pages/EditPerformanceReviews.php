<?php

namespace App\Filament\Resources\PerformanceReviewsResource\Pages;

use App\Filament\Resources\PerformanceReviewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerformanceReviews extends EditRecord
{
    protected static string $resource = PerformanceReviewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

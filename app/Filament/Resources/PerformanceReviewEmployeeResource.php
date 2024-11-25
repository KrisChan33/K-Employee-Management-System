<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerformanceReviewEmployeeResource\Pages;
use App\Filament\Resources\PerformanceReviewEmployeeResource\RelationManagers;
use App\Models\PerformanceReviewEmployee;
use App\Models\PerformanceReviews;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerformanceReviewEmployeeResource extends Resource
{
    protected static ?string $model = PerformanceReviews::class;
    protected static ?string $navigationGroup = 'Performance Management';
    protected static ?string $title = 'Performance Management';
    protected static ?string $label = 'Performance Reviews';
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?int $navigationSort = 7;
    protected static ?int $sort = 7;
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
           //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                ->label('Employee')
                ->searchable()
                ->icon('heroicon-s-user')
                ->sortable(),
            TextColumn::make('rating')
                ->label('Rating')
                ->searchable()
                ->sortable(),
            TextColumn::make('feedback')
                ->label('Feedback')
                ->searchable()
                ->icon('heroicon-s-chat-bubble-left-ellipsis')
                ->sortable(),
            TextColumn::make('review_date')
                ->label('Review Date')
                ->date()
                ->icon('heroicon-s-calendar')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerformanceReviewEmployees::route('/'),
            'create' => Pages\CreatePerformanceReviewEmployee::route('/create'),
            'edit' => Pages\EditPerformanceReviewEmployee::route('/{record}/edit'),
        ];
    }

}

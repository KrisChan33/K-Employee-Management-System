<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaveRequestEmployeeResource\Pages;
use App\Filament\Resources\LeaveRequestEmployeeResource\RelationManagers;
use App\Models\LeaveRequest;
use App\Models\LeaveRequestEmployee;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeaveRequestEmployeeResource extends Resource
{
    protected static ?string $model = LeaveRequest::class;
    protected static ?string $label = 'Leave Requests';
    protected static ?string $navigationGroup='Leave Management';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-left-start-on-rectangle';
    protected static ?int $sort = 6;
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Leave Request Details')
            ->schema([
                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->required()
                    ->columnSpan(6),
                DatePicker::make('end_date')
                    ->label('End Date')
                    ->required()
                    ->columnSpan(6),
                Textarea::make('reason')
                    ->label('Reason')
                    ->cols(4)
                    ->rows(4)
                    ->required()
                    ->columnSpan(12),
            ])
            ->columns(12),
        ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->query(fn(LeaveRequest $query) => $query->where('user_id', auth()->id()))
            ->columns([
            TextColumn::make('reason')
                ->searchable()
                ->icon('heroicon-s-chat-bubble-bottom-center-text')
                ->limit(50)
                ->sortable(),
            TextColumn::make('start_date')
                ->searchable()
                ->icon('heroicon-s-calendar')
                ->date()
                ->sortable(),
            TextColumn::make('end_date')
                ->searchable()
                ->icon('heroicon-s-calendar')
                ->date()
                ->sortable(),
            TextColumn::make('status')
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
            'index' => Pages\ListLeaveRequestEmployees::route('/'),
            // 'create' => Pages\CreateLeaveRequestEmployee::route('/create'),
            'edit' => Pages\EditLeaveRequestEmployee::route('/{record}/edit'),
        ];
    }
}

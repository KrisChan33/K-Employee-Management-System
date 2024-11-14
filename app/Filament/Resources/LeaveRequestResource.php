<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaveRequestResource\Pages;
use App\Filament\Resources\LeaveRequestResource\RelationManagers;
use App\Models\LeaveRequest;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeaveRequestResource extends Resource
{
    protected static ?string $model = LeaveRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Leave Request Details')
                ->schema([
                    Select::make('users_id')
                        ->label('Employee')
                        ->relationship('users', 'name')
                        ->required()
                        ->columnSpan(6),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                        ])
                        ->required()
                        ->columnSpan(6),
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
            ->columns([
                TextColumn::make('users.name')
                    ->label('Employee')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('reason')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('start_date')
                    ->searchable()
                    ->date()
                    ->sortable(),
                TextColumn::make('end_date')
                    ->searchable()
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
            'index' => Pages\ListLeaveRequests::route('/'),
            'create' => Pages\CreateLeaveRequest::route('/create'),
            'edit' => Pages\EditLeaveRequest::route('/{record}/edit'),
        ];
    }
}

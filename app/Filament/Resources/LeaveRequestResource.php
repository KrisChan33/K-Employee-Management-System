<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaveRequestResource\Pages;
use App\Filament\Resources\LeaveRequestResource\RelationManagers;
use App\Models\LeaveRequest;
use App\Models\User;
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
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class LeaveRequestResource extends Resource
{
    protected static ?string $model = LeaveRequest::class;
    protected static ?string $navigationGroup='Leave Management';
    protected static ?string $label = 'Leave Requests Controller';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-left-start-on-rectangle';
    protected static ?int $sort = 6;
    protected static ?int $navigationSort = 6;

    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Leave Request Details')
                ->schema([
                    Select::make('user_id')
                        ->label('Employee')
                        ->relationship('user', 'name')
                        ->required()
                        ->columnSpan(6),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'Pending' => 'Pending',
                            'Approved' => 'Approved',
                            'Rejected' => 'Rejected',
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
                TextColumn::make('user.name')
                    ->label('Employee')
                    ->icon('heroicon-s-user')
                    ->searchable()
                    ->sortable(),
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
                SelectColumn::make('status')
                    ->searchable()
                    ->options([
                        'Pending' => 'Pending',
                        'Approved' => 'Approved',
                        'Rejected' => 'Rejected',
                    ])
                    ->selectablePlaceholder(false)
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),

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

    public static function canViewAny(): bool
    {
        $user = User::find(Auth::id());
        return Auth::check() && Auth::user() == $user->hasRole('super_admin');
    }

}

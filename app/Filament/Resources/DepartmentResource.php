<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;
use App\Models\Department;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Placeholder;
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

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static ?string $navigationGroup = 'Human Resources';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    protected static ?int $sort = 1;
    protected static ?int $navigationSort = 1;
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Department Details')
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->placeholder('Enter the name of the department')
                        ->columnSpan(6),
                    TextInput::make('description')
                        ->label('Description')
                        ->required()
                        ->placeholder('Enter the description of the department')
                        ->columnSpan(6),
                ])
                ->columns(12),
            Section::make('Users and Status')
                ->schema([
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ])
                        ->required()
                        ->placeholder('Select the status of the department')
                        ->columnSpan(6),
                        Fieldset::make('Employees Assigned to this Department')
                        ->schema([
                        Placeholder::make('')
                        ->content(fn (?Department $record): string => $record ? $record->users->pluck('name')->join(', ') : 'No Employee assigned')
                        ->columnSpan(6),
                      ])->columnSpan(6),

                ])
                ->columns(12),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->icon('heroicon-s-user')
                    ->sortable(),
                TextColumn::make('description')
                    ->searchable()
                    ->icon('heroicon-s-chat-bubble-bottom-center-text')
                    ->sortable(),
                TextColumn::make('users.name')
                     ->label('Employee Assigned')
                    ->searchable()
                    ->limit(25)
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable()
                    ->icon('heroicon-s-clipboard-document-list')
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}

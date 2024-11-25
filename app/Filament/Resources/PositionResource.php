<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PositionResource\Pages;
use App\Filament\Resources\PositionResource\RelationManagers;
use App\Models\Position;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PositionResource extends Resource
{
    protected static ?string $model = Position::class;
    protected static ?string $navigationGroup = 'Human Resources';
    protected static ?string $navigationParentItem = 'Departments';
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?int $sort = 3;
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->placeholder('Enter the title of the position'),
                    Textarea::make('description')
                    ->label('Description')
                    ->rows(5)
                    ->cols(10)
                    ->minLength(2)
                    ->maxLength(1024)
                    ->autosize()
                    ->required()
                    ->placeholder('Enter the description of the position'),
                ])->columnSpan(1),
            Fieldset::make('Employees Assigned to this Position')
                ->schema([
                    Placeholder::make('')
                    ->content(fn (?Position $record): string => $record ? $record->users->pluck('name')->join(', ') : 'No Employee assigned')
                    ->columnSpan(6),
                ])->columnSpan(1),
                ])->columns(2);
    }
    // No positions have been created yet.

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->searchable()
                ->icon('heroicon-s-rectangle-stack')
                ->sortable(),
            TextColumn::make('description')
                ->searchable()
                ->icon('heroicon-s-chat-bubble-bottom-center-text')
                ->sortable(),
            TextColumn::make('users.name')
              ->label('Employee Assigned')
              ->icon('heroicon-o-user')
                ->searchable()
                ->limit(25)
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
            'index' => Pages\ListPositions::route('/'),
            'create' => Pages\CreatePosition::route('/create'),
            'edit' => Pages\EditPosition::route('/{record}/edit'),
        ];
    }
}

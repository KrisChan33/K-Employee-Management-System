<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollsResource\Pages;
use App\Filament\Resources\PayrollsResource\RelationManagers;
use App\Models\Payrolls;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class PayrollsResource extends Resource
{
    protected static ?string $model = Payrolls::class;
    protected static ?string $navigationGroup = 'Payroll Management';
    protected static ?string $label = 'Payrolls Controller';
    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';
    protected static ?int $sort = 5;
    protected static ?int $navigationSort = 5;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Payroll Details')
                ->schema([
                    Select::make('user_id')
                        ->relationship('user', 'name')
                        ->label('Employee')
                        ->required()
                        ->placeholder('Select the employee')
                        ->columnSpan(6),
                    TextInput::make('salary')
                        ->label('Salary')
                        ->required()
                        ->placeholder('Enter the salary')
                        ->columnSpan(6),
                    DateTimePicker::make('paid_at')
                        ->label('Paid At')
                        ->required()
                        ->placeholder('Select the date')
                        ->columnSpan(6),
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
                    ->searchable()
                    ->icon('heroicon-o-user')
                    ->sortable(),
                TextColumn::make('salary')
                    ->label('Salary')
                    ->searchable()
                    ->icon('heroicon-o-banknotes')
                    ->sortable(),
                TextColumn::make('paid_at')
                    ->label('Paid At')
                    ->dateTime()
                    ->searchable()
                    ->icon('heroicon-o-calendar')
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
            'index' => Pages\ListPayrolls::route('/'),
            'create' => Pages\CreatePayrolls::route('/create'),
            'edit' => Pages\EditPayrolls::route('/{record}/edit'),
        ];
    }


    public static function canViewAny(): bool
    {
        $user = User::find(Auth::id());

        return Auth::check() && Auth::user() == $user->hasRole('super_admin');
    }
}

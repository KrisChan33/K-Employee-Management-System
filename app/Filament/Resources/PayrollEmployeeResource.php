<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollEmployeeResource\Pages;
use App\Filament\Resources\PayrollEmployeeResource\RelationManagers;
use App\Models\PayrollEmployee;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PayrollEmployeeResource extends Resource
{
    protected static ?string $model = Payrolls::class;
    protected static ?string $navigationGroup = 'Payroll Management';
    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';
    protected static ?int $sort = 5;
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
              ->schema([
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
            'index' => Pages\ListPayrollEmployees::route('/'),
            'create' => Pages\CreatePayrollEmployee::route('/create'),
            'edit' => Pages\EditPayrollEmployee::route('/{record}/edit'),
        ];
    }

  
}

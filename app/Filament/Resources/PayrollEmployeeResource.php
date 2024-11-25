<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollEmployeeResource\Pages;
use App\Filament\Resources\PayrollEmployeeResource\RelationManagers;
use App\Models\PayrollEmployee;
use App\Models\Payrolls;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
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
        ->query(fn(Payrolls $query) => $query->where('user_id', auth()->id()))
            ->columns([
                TextColumn::make('salary')
                    ->label('Your Salary')
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

             
                SelectFilter::make('salary')
                ->options([
                    'below_10000' => 'Below 10000',
                    '10000_to_50000' => '10000 to 50000',
                    'above_50000' => 'Above 50000',
                ])
                ->query(function (Builder $query, array $data) {
                    $value = $data['value'];
                    switch ($value) {
                        case 'below_10000':
                            return $query->where('salary', '<', 10000);
                        case '5000_to_10000':
                            return $query->whereBetween('salary', [10000, 50000]);
                        case 'above_50000':
                            return $query->where('salary', '>', );
                        default:
                            return $query;
                    }
                }),


                SelectFilter::make('paid_at')
                ->options([
                    'today' => 'Today',
                    'yesterday' => 'Yesterday',
                    'this_week' => 'This Week',
                    'last_week' => 'Last Week',
                    'this_month' => 'This Month',
                    'last_month' => 'Last Month',
                    'this_year' => 'This Year',
                    'last_year' => 'Last Year',
                ])
                ->query(function (Builder $query, array $data) {
                    $value = $data['value'];
                    switch ($value) {
                        case 'today':
                            return $query->whereDate('paid_at', Carbon::today());
                        case 'yesterday':
                            return $query->whereDate('paid_at', Carbon::yesterday());
                        case 'this_week':
                            return $query->whereBetween('paid_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                        case 'last_week':
                            return $query->whereBetween('paid_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]);
                        case 'this_month':
                            return $query->whereMonth('paid_at', Carbon::now()->month)
                                ->whereYear('paid_at', Carbon::now()->year);
                        case 'last_month':
                            return $query->whereMonth('paid_at', Carbon::now()->subMonth()->month)
                                ->whereYear('paid_at', Carbon::now()->subMonth()->year);
                        case 'this_year':
                            return $query->whereYear('paid_at', Carbon::now()->year);
                        case 'last_year':
                            return $query->whereYear('paid_at', Carbon::now()->subYear()->year);
                        default:
                            return $query;
                    }
                }),

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

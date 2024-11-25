<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceemployeeResource\Pages;
use App\Filament\Resources\AttendanceemployeeResource\RelationManagers;
use App\Filament\Resources\AttendanceemployeeResource\Widgets\AttendanceEmployeeWidget;
use App\Models\Attendanceemployee;
use App\Models\Attendances;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

                                                                   //for Employee Only


class AttendanceemployeeResource extends Resource
{
    protected static ?string $model = Attendances::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Attendance Management';
    protected static ?int $sort = 4;
    protected static ?int $navigationSort = 4;
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make()->schema([
                Select::make('status')
                    ->options([
                        'absent' => 'Absent',
                        'present' => 'Present',
                        'late' => 'Late',
                        'early' => 'Early',
                    ])
                    ->required()
                    ->columnSpan(1)
                    ->label('Status'),
                // Forms\Components\Timepicker::make('time_in')
                //     ->required()
                //     ->sortable()
                //     ->label('Time In'),
                // Forms\Components\Timepicker::make('time_out')
                //     ->required()
                //     ->sortable()
                //     ->label('Time Out'),
               
                DateTimePicker::make('date')
                    ->required()
                    ->columnSpan(1)
                    ->readOnly()
                    ->default(now())
                    ->label('Date and Time'),
                ])->columns(2)->columnSpan(2),


                
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query(fn(Attendances $query) => $query->where('user_id', auth()->id()))
            ->columns([
            TextColumn::make('status')
                ->searchable()
                ->icon('heroicon-s-clipboard-document-list')
                ->sortable()
                ->columnSpanFull()
                ->label('Status'),
            TextColumn::make('date')
                ->icon('heroicon-s-calendar')
                ->columnSpanFull()
                ->searchable()
                    ->dateTime()
                    ->sortable()
                ->label('Date'),
            ])


        ->filters([
            SelectFilter::make('status')
                ->options([
                    'absent' => 'Absent',
                    'present' => 'Present',
                    'late' => 'Late',
                    'early' => 'Early',
                ]),

                SelectFilter::make('date')
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
                            return $query->whereDate('date', Carbon::today());
                        case 'yesterday':
                            return $query->whereDate('date', Carbon::yesterday());
                        case 'this_week':
                            return $query->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                        case 'last_week':
                            return $query->whereBetween('date', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]);
                        case 'this_month':
                            return $query->whereMonth('date', Carbon::now()->month)
                                ->whereYear('date', Carbon::now()->year);
                        case 'last_month':
                            return $query->whereMonth('date', Carbon::now()->subMonth()->month)
                                ->whereYear('date', Carbon::now()->subMonth()->year);
                        case 'this_year':
                            return $query->whereYear('date', Carbon::now()->year);
                        case 'last_year':
                            return $query->whereYear('date', Carbon::now()->subYear()->year);
                        default:
                            return $query;
                    }
                }),

            ], layout: FiltersLayout::AboveContent)->filtersFormColumns(2)
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
            'index' => Pages\ListAttendanceemployees::route('/'),
            'create' => Pages\CreateAttendanceemployee::route('/create'),
            'edit' => Pages\EditAttendanceemployee::route('/{record}/edit'),
        ];
    }

}

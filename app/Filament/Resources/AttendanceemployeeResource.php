<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendanceemployeeResource\Pages;
use App\Filament\Resources\AttendanceemployeeResource\RelationManagers;
use App\Models\Attendanceemployee;
use App\Models\Attendances;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
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
            'index' => Pages\ListAttendanceemployees::route('/'),
            'create' => Pages\CreateAttendanceemployee::route('/create'),
            'edit' => Pages\EditAttendanceemployee::route('/{record}/edit'),
        ];
    }
}

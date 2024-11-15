<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendancesResource\Pages;
use App\Filament\Resources\AttendancesResource\RelationManagers;
use App\Models\Attendances;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AttendancesResource extends Resource
{
    protected static ?string $model = Attendances::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Attendance Management';
    protected static ?string $label = 'Attendances Controller';
    protected static ?int $sort = 4;
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make()->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->preload()
                    ->label('User')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'absent' => 'Absent',
                        'present' => 'Present',
                        'late' => 'Late',
                        'early' => 'Early',
                    ])
                    ->required()
                    ->columnSpanFull()
                    ->label('Status'),
                // Forms\Components\Timepicker::make('time_in')
                //     ->required()
                //     ->sortable()
                //     ->label('Time In'),
                // Forms\Components\Timepicker::make('time_out')
                //     ->required()
                //     ->sortable()
                //     ->label('Time Out'),
                ])->columnSpan(1)->columns(2),

                Fieldset::make('')
                ->schema([
                DateTimePicker::make('date')
                    ->required()
                    ->readOnly()
                    ->default(now())
                    ->label('Date and Time'),
                ])->columnspan(1),



                
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('user.name')
                ->label('Attended')
                ->searchable()
                ->icon('heroicon-s-user')
                ->limit(25)
                ->sortable(),
            SelectColumn::make('status')
                ->searchable()
                ->options([
                    'absent' => 'Absent',
                    'present' => 'Present',
                    'late' => 'Late',
                    'early' => 'Early',
                ])
                ->sortable()
                ->label('Status'),
            TextColumn::make('date')
                ->icon('heroicon-s-calendar')
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
            'index' => Pages\ListAttendances::route('/'),
            'create' => Pages\CreateAttendances::route('/create'),
            'edit' => Pages\EditAttendances::route('/{record}/edit'),
        ];
    }

    
    public static function canViewAny(): bool
    {
        $user = User::find(Auth::id());

        return Auth::check() && Auth::user() == $user->hasRole('super_admin');
    }
}

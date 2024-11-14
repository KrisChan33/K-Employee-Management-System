<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttendancesResource\Pages;
use App\Filament\Resources\AttendancesResource\RelationManagers;
use App\Models\Attendances;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
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

class AttendancesResource extends Resource
{
    protected static ?string $model = Attendances::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make()->schema([
              Select::make('users_id')
                    ->relationship('users', 'name')
                    ->required()
                    ->preload()
                    ->label('User'),
              
                Select::make('status')
                    ->options([
                        'absent' => 'Absent',
                        'present' => 'Present',
                        'late' => 'Late',
                        'early' => 'Early',
                    ])
                    ->required()
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
                DatePicker::make('date')
                    ->required()
                    ->default(now())
                    ->readOnly()
                    ->label('Date'),
                    ])->columnspan(1),


            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('users.name')
                ->label('Employee Attended')
                ->searchable()
                ->limit(25)
                ->sortable(),
            TextColumn::make('status')
                ->searchable()
                ->sortable()
                ->label('Status'),
            TextColumn::make('date')
                ->searchable()
                    ->date()
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
}

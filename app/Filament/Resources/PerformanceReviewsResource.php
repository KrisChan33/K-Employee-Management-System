<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerformanceReviewsResource\Pages;
use App\Filament\Resources\PerformanceReviewsResource\RelationManagers;
use App\Models\PerformanceReviews;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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
use Illuminate\Support\Facades\Auth;

class PerformanceReviewsResource extends Resource
{
    protected static ?string $model = PerformanceReviews::class;
    protected static ?string $navigationGroup = 'Performance Management';
    protected static ?string $title = 'Performance Management';
    protected static ?string $label = 'Performance Reviews Controller';
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?int $navigationSort = 7;
    protected static ?int $sort = 7;


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Employee Information')
                ->schema([
                    Select::make('user_id')
                        ->relationship('user', 'name')
                        ->label('Employee')
                        ->required()
                        ->placeholder('Select the employee')
                        ->columnSpan(1),
                    DatePicker::make('review_date')
                        ->label('Review Date')
                        ->required()
                        ->default(now())
                        ->format('Y-m-d')
                        ->columnSpan(1),
                ])
                ->columnSpan(1)->columns(2),
            Section::make('Performance Review')
                ->schema([
                    Select::make('rating')
                        ->label('Rate the Employee 1 to 5')
                        ->options([
                            1 => '1',
                            2 => '2',
                            3 => '3',
                            4 => '4',
                            5 => '5',
                        ])
                        ->required()
                        ->columnSpan(1),
                    Textarea::make('feedback')
                        ->label('Feedback')
                        ->rows(2)
                        ->cols(30)
                        // ->autosize()
                        ->required()
                        ->columnSpan(1),
                ])
                ->columnSpan(1)->columns(2),
        ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Employee')
                    ->searchable()
                    ->icon('heroicon-s-user')
                    ->sortable(),
                TextColumn::make('rating')
                    ->label('Rating')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('feedback')
                    ->label('Feedback')
                    ->searchable()
                    ->icon('heroicon-s-chat-bubble-left-ellipsis')
                    ->sortable(),
                TextColumn::make('review_date')
                    ->label('Review Date')
                    ->date()
                    ->icon('heroicon-s-calendar')
                    ->searchable()
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
            'index' => Pages\ListPerformanceReviews::route('/'),
            'create' => Pages\CreatePerformanceReviews::route('/create'),
            'edit' => Pages\EditPerformanceReviews::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $user= User::find(Auth::id());
        return Auth::check() && Auth::user() == $user->hasRole('super_admin');
     
    }
}

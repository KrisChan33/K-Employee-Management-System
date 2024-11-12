<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationGroup = 'User Management';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Split::make([
                Section::make('User Information')
                    ->schema([
                            TextInput::make('name')
                                ->placeholder('John Doe')
                                ->required()
                                ->autofocus()
                                ->label('Full Name')
                                ->hint('Enter the full name')
                                ->regex('/^[a-zA-Z\s-]+$/')
                                ->required()
                                ->columnspan(4)
                                ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'This is the full name it will show in the system'),
                        TextInput::make('email')
                            ->label('Email')
                            ->required()
                            ->autocomplete('email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->columnspan(4)
                            ->label('Email Address')
                            ->hint('Enter the email')
                            ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'This is the email address of the User')
                            ->required(),
                        TextInput::make('password')
                            ->label('Password')
                            ->autocomplete(true)
                            ->columnspan(4)
                            ->label('Password')
                            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                            ->dehydrated(fn ($state) => filled($state))
                            ->required(fn (string $context): bool => $context === 'create')
                            ->minLength(8)
                            ->password()
                            ->hint('Enter the password')
                            ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'This is the password of the user and will be used to login'),
                        Select::make('department_id')
                            ->label('Department')
                            ->relationship('department', 'name')
                            ->columnspan(4)
                            ->hint('Select the department')
                            ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'This is the Department of the user')
                            ->preload()
                            ->searchable(),

                            Select::make('roles')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->hint('Select the role')
                            ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'This is the Role of the user in the website')
                            ->columnspan(2)
                            ->preload()
                            ->searchable()
                        
                //    ])->compact(), 
                   //for another Section
            ])->columns(12),
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // SelectColumn::make('roles.name')
                // ->options([
                //     'panel_user' => 'Panel User',
                //     'super_admin ' => 'Super Admin',
                // ])
                // ->selectablePlaceholder('Select Role')
                // ->label('Role')
                // ->searchable()
                // ->sortable('asc'),

                TextColumn::make('name')
                    ->label('Full Name')
                    ->icon('heroicon-o-user')
                    ->iconPosition('before')
                    ->searchable()
                    ->iconColor('primary')
                    ->sortable('asc')
                    ->toggleable(),

                TextColumn::make('email')
                    ->label('Email Address')
                    ->icon('heroicon-o-envelope')
                    ->iconPosition('before')
                    ->searchable()
                    ->iconColor('primary')
                    ->sortable('asc')
                    ->toggleable(),
                
                TextColumn::make('password')
                ->label('Password')
                ->icon('heroicon-o-lock-closed')
                ->iconPosition('before')
                ->iconColor('primary')
                ->Toggleable()
                ->limit(10),
                
                TextColumn::make('created_at')  
                ->label('Created At')
                ->dateTime(' M d Y, H:i:s', 'Asia/Manila')
                ->icon('heroicon-o-calendar-days')
                ->iconPosition('before')
                ->iconColor('primary')
                ->toggleable(),
                
                TextColumn::make('updated_at')
                ->label('Updated At')
                ->dateTime(' M d Y, H:i:s', 'Asia/Manila')
                ->icon('heroicon-o-calendar-days')
                ->iconPosition('before')
                ->iconColor('primary')
                ->toggleable(),
            ])
            ->filters([
        //                
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ] , position: ActionsPosition::BeforeCells)

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
   
    
      //badges 
      public static function getNavigationBadge(): ?string
      {
          return static::getModel()::count();
      }
      public static function getNavigationBadgeColor(): string|array|null
      {
          return static::getModel()::count() > 0 ? 'success' : 'danger';
      }
      
    }



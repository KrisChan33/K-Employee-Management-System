<?php

namespace App\Filament\Pages;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;
    public function filtersForm(Form $form): Form
    {
            return $form
                ->schema([
                    // Section::make()
                        // ->schema([
                        //     // TextInput::make('name')
                        //     //     ->label('Name')
                        //     //     ->required(),
                        //     DatePicker::make('StartDate')
                        //         ->label('Start Date')
                        //         ->placeholder('YYYY-MM-DD')
                        //         // ->type('date')
                        //         ->required(),
                        //     DatePicker::make('EndDate')
                        //         ->label('End Date')
                        //         ->default(now()->format('Y-m-d'))
                        //         ->placeholder('YYYY-MM-DD')
                        //         // ->type('date')
                        //         ->required(),
                        // ])
                        // ->columns(2),
                ]);
        }
    }
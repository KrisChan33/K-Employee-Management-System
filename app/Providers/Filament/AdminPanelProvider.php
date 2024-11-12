<?php

namespace App\Providers\Filament;

use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('K-Employee-Management-System')
            ->profile()
            ->login()
            ->brandName('K-Employee Management System')
            ->brandLogo('')
            ->darkMode(true)
            ->registration()
            ->font('Oxanium')
            ->colors([
                'primary' => Color::Fuchsia,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            
            ->plugins([
                FilamentEditProfilePlugin::make()
                    ->slug('my-profile')
                    ->setTitle('My Profile')
                    ->setNavigationLabel('My Profile')
                    ->setNavigationGroup('My Profile')
                    ->setIcon('heroicon-o-user')
                    // ->setSort(10)
                    // ->canAccess(fn () => auth()->user()->id === 1)
                    ->shouldRegisterNavigation(true)
                    ->shouldShowDeleteAccountForm(true)
                    ->shouldShowSanctumTokens()
                    ->shouldShowBrowserSessionsForm(

                        // fn() => auth()->user()->id === 1, //optional
                        //OR
                    true //optional
                    )
                    ->shouldShowAvatarForm()
                    // ->customProfileComponents([
                    //     \App\Livewire\CustomProfileComponent::class,
                    // ])
                ,
           
                FilamentShieldPlugin::make()
           
                    ])
                    
        ->userMenuItems([
            'profile' => MenuItem::make()
                ->label(fn() => auth()->user()->name)
                ->url(fn (): string => EditProfilePage::getUrl())
                ->icon('heroicon-m-user-circle')
                //If you are using tenancy need to check with the visible method where ->company() is the relation between the user and tenancy model as you called
                // ->visible(function (): bool {
                //     return auth()->user()->company()->exists();
                // }),
        ])
                    ;
            }
}
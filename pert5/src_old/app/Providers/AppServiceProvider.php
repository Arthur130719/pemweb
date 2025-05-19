<?php

namespace App\Providers;

use Filament\Pages\Page;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use App\Policies\ActivityPolicy;
use App\Http\Middleware\ClientAuth;
use Illuminate\Support\Facades\Gate;
use Filament\Actions\MountableAction;
use Filament\Support\Enums\Alignment;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;
use Filament\Notifications\Notification;
use Filament\Support\Enums\VerticalAlignment;
use Illuminate\Validation\ValidationException;
use Filament\Notifications\Livewire\Notifications;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Router $router): void
    {
        Gate::policy(Activity::class, ActivityPolicy::class);
        Page::formActionsAlignment(Alignment::Right);
        Notifications::alignment(Alignment::End);
        Notifications::verticalAlignment(VerticalAlignment::End);
        Page::$reportValidationErrorUsing = function (ValidationException $exception) {
            Notification::make()
                ->title($exception->getMessage())
                ->danger()
                ->send();
        };
        MountableAction::configureUsing(function (MountableAction $action) {
            $action->modalFooterActionsAlignment(Alignment::Right);
        });
        // Route::middleware('client.auth', ClientAuth::class);
        // $router->aliasMiddleware('client.auth', ClientAuth::class);
    }
    
}

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware('client.auth', \App\Http\Middleware\ClientAuth::class);
    }
}



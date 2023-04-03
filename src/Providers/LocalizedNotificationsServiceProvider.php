<?php

namespace Aw3r1se\LocalizedNotifications\Providers;

use Aw3r1se\LocalizedNotifications\Console\MakeLocalizedNotification;
use Illuminate\Support\ServiceProvider;

class LocalizedNotificationsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__ . '/stubs' => database_path('seeders'),
        ], 'seeders');

        $this->commands([
            MakeLocalizedNotification::class,
        ]);
    }
}
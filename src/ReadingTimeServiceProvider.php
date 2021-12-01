<?php

namespace Logiek\ReadingTime;

use Illuminate\Support\ServiceProvider;

class ReadingTimeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/reading-time.php' => config_path('reading-time.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/reading-time.php', 'reading-time');

        $this->app->bind(ReadingTime::class, ReadingTime::class);
    }
}

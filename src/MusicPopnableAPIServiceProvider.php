<?php

namespace Yebto\MusicPopnableAPI;

use Illuminate\Support\ServiceProvider;

class MusicPopnableAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/yebto-music-popnable.php', 'yebto-music-popnable');

        $this->app->singleton('yebto-music-popnable', function () {
            return new MusicPopnableAPI(config('yebto-music-popnable'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/yebto-music-popnable.php' => config_path('yebto-music-popnable.php'),
        ], 'yebto-music-popnable-config');
    }
}

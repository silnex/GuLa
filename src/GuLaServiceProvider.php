<?php

namespace SilNex\GuLa;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class GuLaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/gula.php', 'gula');
        config(['database.connections.gula' => config('gula')]);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/gula.php' => config_path('gula.php'),
            ], 'config');
        }
    }
}

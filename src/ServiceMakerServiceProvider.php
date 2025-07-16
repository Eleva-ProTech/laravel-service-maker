<?php

namespace Eleva\ServiceMaker;

use Illuminate\Support\ServiceProvider;
use Eleva\ServiceMaker\Commands\MakeInterfaceCommand;
use Eleva\ServiceMaker\Commands\MakeServiceCommand;
use Eleva\ServiceMaker\Commands\MakeServiceWithInterfaceCommand;

class ServiceMakerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeInterfaceCommand::class,
                MakeServiceCommand::class,
                MakeServiceWithInterfaceCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../config/service-maker.php' => config_path('service-maker.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/service-maker.php', 'service-maker'
        );
    }
}
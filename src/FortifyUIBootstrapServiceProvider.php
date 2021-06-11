<?php

namespace drewwalton19216801\FortifyUIBootstrap;

use Illuminate\Support\ServiceProvider;
use drewwalton19216801\FortifyUIBootstrap\Commands\FortifyUIBootstrapCommand;

class FortifyUIBootstrapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),
                // Add more resources here
            ], 'fortify-ui-bootstrap-resources');

            $this->commands([
                FortifyUIBootstrapCommand::class,
            ]);
        }
    }
}

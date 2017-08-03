<?php

namespace AccessManager\Routers\Providers;


use Illuminate\Support\ServiceProvider;

class RoutersServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php' );
        $this->loadViewsFrom( __DIR__ . "/../Views", 'Routers');
        $this->loadMigrationsFrom( __DIR__ . "/../Database/Migrations");
    }
}
<?php

namespace Crockerio\ELAP;

use Illuminate\Support\ServiceProvider;

class ELAPServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * The register() method is used to bind any classes or functionality into the app container.
     *
     * @return void
     */
    public function register()
    {
        // Register Controllers
        $this->app->make('Crockerio\ELAP\ELAPController');
    }

    /**
     * Bootstrap services.
     *
     * The boot() method is used to boot any routes, event listeners, or any other functionality you want to add to your
     * package.
     *
     * @return void
     */
    public function boot()
    {
        // Setup routes file
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Setup migrations directory
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        // Setup the factories directory
        $this->loadFactoriesFrom(__DIR__.'/factories');

        // Setup views directory
        $this->loadViewsFrom(__DIR__.'/views', 'elap');
    }
}

<?php

namespace Hp\Compose;

use Illuminate\Support\ServiceProvider;

class ComposeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'compose');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'compose');
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // if ($this->app->runningInConsole()) {
        //     $this->publishes([
        //         __DIR__.'/../config/config.php' => config_path('compose.php'),
        //     ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/compose'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/compose'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/compose'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        // }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        // $this->mergeConfigFrom(__DIR__.'/config/config.php', 'compose');

        // // Register the main class to use with the facade
        // $this->app->singleton('compose', function () {
        //     return new Compose;
        // });
    }
}

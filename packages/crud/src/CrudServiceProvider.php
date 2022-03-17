<?php

namespace HP\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Hp\Crud\CrudController');
        $this->loadViewsFrom(__DIR__.'/views','crud');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

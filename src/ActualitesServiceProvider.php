<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ActualitesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__ . '/routes/wep.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'actualites');

        // Views
        $this->publishes([__DIR__.'\views' => base_path('resources/views')],'resources');
        $this->publishes([__DIR__.'\public' => public_path('/')], 'public');
        
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }
}

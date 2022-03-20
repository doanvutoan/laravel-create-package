<?php

namespace Mallcode\Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../../resources/view","post");
        $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
        $this->loadTranslationsFrom(__DIR__ . "/../../resources/lang","post");
    }

    public function register()
    {
        foreach (glob(__DIR__.'/../../helpers/*.php') as $filename) {
            require_once $filename;
        }

        $this->mergeConfigFrom(__DIR__ . "/../../config/general.php","general");
        
    }
}

<?php

namespace MinimalTheme;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('crm-theme', __DIR__.'/../resources/css/theme.css');
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
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
        // config()->set('settings.facebook', \App\Models\Setting::pluck('facebook')->first());
        // config()->set('settings.theme_mode', \App\Models\Setting::pluck('theme_mode')->first());
    }
}


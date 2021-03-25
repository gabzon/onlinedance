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
        config()->set('settings.theme_mode', \App\Models\Setting::pluck('theme_mode')->first());
        config()->set('settings.email', \App\Models\Setting::pluck('email')->first());
        config()->set('settings.logo', \App\Models\Setting::pluck('logo')->first());
        config()->set('settings.fb_pixel', \App\Models\Setting::pluck('fb_pixel')->first());
        config()->set('settings.google_analytics', \App\Models\Setting::pluck('google_analytics')->first());
        config()->set('settings.about', \App\Models\Setting::pluck('about')->first());
        config()->set('settings.facebook', \App\Models\Setting::pluck('facebook')->first());
        config()->set('settings.instagram', \App\Models\Setting::pluck('instagram')->first());
        config()->set('settings.twitter', \App\Models\Setting::pluck('twitter')->first());
        config()->set('settings.tiktok', \App\Models\Setting::pluck('tiktok')->first());
        config()->set('settings.youtube', \App\Models\Setting::pluck('youtube')->first());
        config()->set('settings.snapchat', \App\Models\Setting::pluck('snapchat')->first());
        config()->set('settings.terms', \App\Models\Setting::pluck('terms')->first());
        config()->set('settings.privacy', \App\Models\Setting::pluck('privacy')->first());
        config()->set('settings.faq', \App\Models\Setting::pluck('faq')->first());
        config()->set('settings.landing_hero', \App\Models\Setting::pluck('landing_hero')->first());
        config()->set('settings.dashboard_hero', \App\Models\Setting::pluck('dashboard_hero')->first());
        config()->set('settings.monthly_price', \App\Models\Setting::pluck('monthly_price')->first());
        config()->set('settings.yearly_price', \App\Models\Setting::pluck('yearly_price')->first());
        config()->set('settings.plan_name', \App\Models\Setting::pluck('plan_name')->first());
        config()->set('settings.trail_days', \App\Models\Setting::pluck('trail_days')->first());
        config()->set('settings.payment_gateway', \App\Models\Setting::pluck('payment_gateway')->first());
        config()->set('settings.currency', \App\Models\Setting::pluck('currency')->first());
    }
}


<?php

namespace App\Providers;

use Igaster\LaravelTheme\Facades\Theme;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment() === 'Production'){
            Theme::setSetting('cache-version', md5(config('app.version') ?? 'undefined'));
        } else {
            Theme::setSetting('cache-version', Str::random(40));
        }
    }
}

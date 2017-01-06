<?php

namespace App\Providers;

use App\Field;
use App\Observers\FieldObserver;
use App\Observers\SettingObserver;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //dd('Calling Fields from Boot');
        Field::observe(FieldObserver::class);
        Setting::observe(SettingObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

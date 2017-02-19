<?php

namespace App\Modules\Directories\Providers;

use Caffeinated\Menus\Facades\Menu;
use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'directories');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'directories');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'directories');
        $admin = Menu::get('admin');
        $admin->add('Browse', '#')->icon('folder-open-o')->data('order',1);
        $admin->browse->add('Articles','/');

        $directories = $admin->add('Setup Directories', '#')->icon('folder-open-o')->data('order',2);
        $directories->add('Directories Manager', route('directories.index'))->icon('folder-open');
        $directories->add('Categories Manager', '/')->icon('clone');
        $directories->add('Fields Manager', '/')->icon('database');

        $admin->sortBy('order');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}

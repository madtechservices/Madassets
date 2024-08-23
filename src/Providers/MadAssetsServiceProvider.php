<?php

namespace Madtechservices\MadAssets\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MadAssetsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Example: Inject custom menu items into the settings menu
        View::composer('partials.nav', function ($view) {
            $view->with('customMenuItems', [
                [
                    'url' => route('settings.campuses'),
                    'icon' => 'fa-university',
                    'label' => 'Campuses',
                ],
            ]);
        });

         // Load Migrations
         $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        //  $this->loadMigrationsFrom(__DIR__.'/../../migrations');

         // Load Routes
         $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //  $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
 
         // Load Views
         $this->loadViewsFrom(__DIR__.'/../../resources/views', 'madassets');
    }

    public function register()
    {
        // Register any bindings or services here
    }
}
<?php

namespace App\Providers;

use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Schema;
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
        User::observe(UserObserver::class);

        view()->composer('*', function ($view) {
            $current_route_name = \Request::route()->getName();

            $view->with('current_route_name', $current_route_name);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);    
    /*    //check that app is local
        if ($this->app->isLocal()) {
            $this->app['request']->server->set('HTTPS', true);
        } else {
        //else register your services you require for production
            $this->app['request']->server->set('HTTPS', true);
        }*/
    }
}

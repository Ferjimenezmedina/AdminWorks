<?php

namespace empleaDos\Providers;

use empleaDos\Http\ViewComposers\SearchVacanModel;
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
        $this->app->make('view')->composer(
            ['frontend.busqueda'],
            SearchVacanModel::class
        );
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

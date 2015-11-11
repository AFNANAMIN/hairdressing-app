<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Hours;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $view->with('openingHours', Hours::currentHours());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

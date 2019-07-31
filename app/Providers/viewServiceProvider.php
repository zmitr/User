<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class viewServiceProvider extends ServiceProvider
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
        view::composer('layouts.app','App\Providers\ViewComposers\ArtComposer');
    }
}

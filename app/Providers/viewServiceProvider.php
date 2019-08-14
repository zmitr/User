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
        view::composer(['layouts.app','post_edit'],'App\Providers\ViewComposers\ArtComposer');
        view::composer(['templates.users'],'App\providers\ViewComposers\UserComposer');
    }
}

<?php

namespace Hennio\Postcodenlapi;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class PostcodenlapiServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/postcodenl.php' => config_path('postcodenl.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('postcodenl', function () {
            return new Postcodenlapi();
        });
    }

    public function provides()
    {
        return ['postcodenl'];
    }
}

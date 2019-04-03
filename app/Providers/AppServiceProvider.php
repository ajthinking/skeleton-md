<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        File::macro('forceMakeDirectory', function($path) {
            File::makeDirectory(
                $path,
                0755, false, true
            );
        });
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

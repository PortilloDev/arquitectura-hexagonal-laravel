<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /**
        * Load BoundedContext migrations
        *
        */
        $this->loadMigrationsFrom(
            \File::allFiles(\base_path(path: "src/BoundedContext/**/Infraestruture/migrations"))
        );
    }
}

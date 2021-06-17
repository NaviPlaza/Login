<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;  //Se agregó para que muestre los comandos de migraciones

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
    //Se modificó para que acepte los comandos de migraciones
    public function boot()
    {
    Schema::defaultStringLength(191);
    }
}

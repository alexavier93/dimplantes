<?php

namespace App\Providers;

use App\Models\Tratamento;
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

        view()->composer('*', function($view){
            $tratamentos = Tratamento::all();
            $view->with('submenuTratamentos', $tratamentos);
        });

    }
}

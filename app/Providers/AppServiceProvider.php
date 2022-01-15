<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        if(auth()->check()){
            $amountDonate = auth()->user()->donates()->get()->sum("amount");
            View::share("*", ["donateAmount" => $amountDonate]);
            //view()->share("*", ["donateAmount" => $amountDonate]);
        }
    }
}

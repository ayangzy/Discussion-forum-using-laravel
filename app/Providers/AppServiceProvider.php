<?php

namespace App\Providers;

use View;
use App\Channel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;




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
        //
        View::share('channels', Channel::all());

        Schema::defaultStringLength(191);
    }
}

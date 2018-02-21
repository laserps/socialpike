<?php

namespace App\Providers\Custom;

use Illuminate\Support\ServiceProvider;
use App\User;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('Member.layouts.include.cardleft', User::where('id',Auth()->guard('web')->id()) ); 
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

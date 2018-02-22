<?php

namespace App\Providers\Custom;

use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->ComposerFormData();
    }
    
    public function ComposerFormData()
    {
        view()->composer('Member.layouts.include.top','App\Http\Composers\ComposerProfileData');
    }
}

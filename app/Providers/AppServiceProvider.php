<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\WebsiteSetting;
use App\Model\SocialMedia;
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
        Schema::defaultStringLength(191);

        view()->composer('*', function($view){
            $websetting = WebsiteSetting::find(1);
            $view->with('websetting',$websetting);
        });

        view()->composer('*', function($view){
            $socialmedia = SocialMedia::get();
            $view->with('socialmedia',$socialmedia);
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categorry;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('website.index',function($view){
                $view->with('categorries',Categorry::categories());
         });

         view()->composer('website.layouts.bottomHeader',function($view){
                $view->with('categorries',Categorry::categories());
         });
         
         view()->composer('website.layouts.bottomHeader',function($view){
                $view->with('cities',config('constant.cities'));
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

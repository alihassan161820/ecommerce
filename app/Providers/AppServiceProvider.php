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
         
         view()->composer('website.layouts.middleHeader',function($view){
                $view->with('cities',config('constant.cities'));
         });

         view()->composer('website.create-auction',function($view){
                $view->with('cities',config('constant.cities'));
         });

         view()->composer('website.layouts.left-sidebar',function($view){
                $view->with('classes',config('constant.classes'));
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('name','bitm');
        View::composer('frontEnd.includes.menu',function($view){
            $publishedCategories = Category::where('public_status',1)->get();
            $view->with('publishedCategories',$publishedCategories);
            
            
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

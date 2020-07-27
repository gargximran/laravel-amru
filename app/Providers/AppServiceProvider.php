<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subcategory;
use App\Category;
use View;
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
        View::composer('frontend.inc.navbar', function ($view) {
            $subcategories=Subcategory::where('sub_status','active')->get();
             $view->with('subcategories', $subcategories);
         });
         View::composer('frontend.home.maincontent', function ($view) {
            $categories=Category::where('category_status','active')->get();
             $view->with('categories', $categories);
         });
         View::composer('frontend.frontend_master', function ($view) {
            $viewCat=Category::where('category_status','active')->get();
             $view->with('viewCat', $viewCat);
         });
    }
}

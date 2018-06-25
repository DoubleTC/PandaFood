<?php

namespace App\Providers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Information;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('infoweb', Information::find(1));
        View::share('cateshow', Category::all());
        View::share('prodshow', Product::orderBy('product_id','desc')->get());
        View::share('blogshow', Blog::orderBy('blog_id','desc')->limit(4)->get());
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

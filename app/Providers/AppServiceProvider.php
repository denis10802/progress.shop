<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        // $categories = Category::orderBy('id')->get();
        // $products = Product::all();

        // \Illuminate\Support\Facades\View::share([
        //     'categories' => $categories,
        //     'products'=> $products
        // ]);
    }
}

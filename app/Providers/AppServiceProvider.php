<?php

namespace App\Providers;

use App\Category;
use App\News;
use App\User;
use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('categories', Category::all());
        View::share('news', News::all());
        View::share('newsMain', News::query()->orderBy('created_at')->take(3)->get());
    }
}

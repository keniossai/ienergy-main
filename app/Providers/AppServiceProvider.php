<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
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
        // Links Service Provider
        $categories = Category::take(8)->get();
        View::share('categories', $categories);

        // Setting Service Provider
        $setting = Setting::first();
        View::share('setting', $setting);
    }
}

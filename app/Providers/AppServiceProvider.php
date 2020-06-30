<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // بضيف دا عشان يعمل قابلية اضافة اشكال الايموشن فى الموقع


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
        Schema::defaultStringLength(191); // بضيف دا عشان يعمل قابلية اضافة اشكال الايموشن فى الموقع
    }
}

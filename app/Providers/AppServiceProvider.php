<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = $this->app['session']->get('locale'); // This would be the same as session()->get(... and Session::get(...
        $this->app->setLocale($locale); // This would also equal app()->setLocale(... and App::setLocale(...
    }


}

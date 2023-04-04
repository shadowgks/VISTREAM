<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Media;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);

        // Using view composer to set following variables globally
        view()->composer('*', function ($view) {
            $view->with('global_data', [
                //Country navbar
                'countries' => Country::orderBy('name', 'ASC')->get(),
                //Genre navbar
                'genres' => Genre::orderBy('name', 'ASC')->get(),
            ]);
        });
    }
}

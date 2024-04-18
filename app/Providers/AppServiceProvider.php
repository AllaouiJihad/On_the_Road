<?php

namespace App\Providers;

use App\Models\category;
use App\Models\Destination;
use App\Models\Type;
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
        view()->composer('*', function ($view) {
            
            $categories = category::all();
            $destinations = Destination::all();
            $types = Type::all();
            $view->with('categories', $categories)->with('destinations', $destinations)->with('types', $types);

        
    });
    }
}

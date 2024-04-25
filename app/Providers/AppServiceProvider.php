<?php

namespace App\Providers;

use App\Models\category;
use App\Models\Destination;
use App\Models\Type;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        
    
        $this->app->bind( UserServiceInterface::class,UserService::class);
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

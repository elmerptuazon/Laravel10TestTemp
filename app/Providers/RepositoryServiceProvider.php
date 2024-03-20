<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Product\IProductRepository;
use App\Repositories\Product\ProductRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IProductRepository::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
    }
}

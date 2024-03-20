<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Product\IProductService;
use App\Service\Product\ProductService;

class ServiceClassProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IProductService::class, ProductService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

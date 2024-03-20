<?php

namespace App\Repositories\Product;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository implements IProductRepository
{
    public function filterItem(string $productName=null): ?LengthAwarePaginator {
        $cacheKey = 'products_' . $productName;
            
        $products = Cache::remember($cacheKey, now()->endOfDay(), function () use ($productName) {
            return Product::when($productName, function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })->paginate(10); // Change the pagination limit as needed
        });
        
        return $products;
    }
}
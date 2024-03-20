<?php

namespace App\Repositories\Product;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface IProductRepository 
{
    public function filterItem(string $productName=null): ?LengthAwarePaginator;
}
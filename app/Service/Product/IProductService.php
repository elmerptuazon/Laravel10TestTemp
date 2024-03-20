<?php

namespace App\Service\Product;

use Illuminate\Pagination\LengthAwarePaginator;

interface IProductService
{
    public function processItem(string $name=null): ?LengthAwarePaginator;
}
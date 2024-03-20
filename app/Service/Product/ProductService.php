<?php

namespace App\Service\Product;

use App\Repositories\Product\IProductRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService implements IProductService
{

    private IProductRepository $productRepository;

    public function __construct(IProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function processItem(string $name=null): ?LengthAwarePaginator {

        return $this->productRepository->filterItem($name);
    }
}
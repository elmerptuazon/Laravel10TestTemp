<?php

namespace App\Http\Controllers;

use App\Service\Product\IProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductItemsController extends Controller
{
    private IProductService $productService;

    public function __construct(IProductService $productService) {
        $this->productService = $productService;
    }
    public function __invoke(Request $request)
    {
        $products = $this->productService->processItem($request->query('name'));

        return response()->json([
            'status' => 'success',
            'products' => $products
        ], Response::HTTP_OK);
    }
}

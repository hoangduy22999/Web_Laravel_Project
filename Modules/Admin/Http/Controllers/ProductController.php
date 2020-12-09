<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;
use Modules\Admin\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request)
    {
//        if($request->get)
        $products = $this->productService->getListProducts();
        $categories = $this->productService->getCategories();

        return view('admin::products.index', compact('products', 'categories'));
    }
}

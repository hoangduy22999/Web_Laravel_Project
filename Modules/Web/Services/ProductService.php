<?php


namespace Modules\Web\Services;


use App\Repositories\Category\CategoryInterface;
use App\Repositories\Product\WebProductInterface;
use App\Repositories\Warehouse\WarehouseInterface;
use Illuminate\Http\Request;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;
    protected $warehouseInterface;

    public function __construct(
        WebProductInterface $productInterface,
        CategoryInterface $categoryInterface,
        WarehouseInterface $warehouseInterface) {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
        $this->warehouseInterface = $warehouseInterface;
    }

    public function getListProducts() {
        return $this->productInterface->getAllWithPaginate();
    }

    public function getCategories() {
        return $this->categoryInterface->getAll();
    }

    public function getProductDetail($id) {
        return $this->productInterface->getProductById($id);
    }

    public function checkProductQuantity($productId, $quantity) {
        $remainQuantity = $this->warehouseInterface->getQuantityRemaining($productId);
        return $remainQuantity >= $quantity;
    }

    public function getListProductByKeyword(Request $request) {
        $categoryId = $request->get('category_id');
        $keyword = $request->get('keyword');
        $products = null;
        if(empty($categoryId)) {
            $products =  $this->productInterface->getListProductsWithKeyword($keyword);
        } else {
            $products = $this->productInterface->getListProductsWithKeyword($keyword, $categoryId);
        }
        return $products;
    }

}

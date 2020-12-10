<?php


namespace Modules\Web\Services;


use App\Repositories\Category\CategoryInterface;
use App\Repositories\Product\WebProductInterface;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;

    public function __construct(WebProductInterface $productInterface, CategoryInterface $categoryInterface) {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
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

}

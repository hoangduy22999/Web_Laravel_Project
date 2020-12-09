<?php


namespace Modules\Web\Services;


use Modules\Web\Repositories\Category\CategoryInterface;
use Modules\Web\Repositories\Product\ProductInterface;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;

    public function __construct(ProductInterface $productInterface, CategoryInterface $categoryInterface) {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
    }

    public function getListProducts() {
        return $this->productInterface->getAll();
    }

    public function getCategories() {
        return $this->categoryInterface->getAll();
    }

}

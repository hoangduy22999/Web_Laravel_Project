<?php


namespace Modules\Admin\Services;


use Modules\Admin\Repositories\Category\CategoryInterface;
use Modules\Admin\Repositories\Product\ProductInterface;

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

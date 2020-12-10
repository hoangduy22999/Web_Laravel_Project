<?php


namespace Modules\Admin\Services;


use Modules\Admin\Repositories\Category\CategoryInterface;
use Modules\Admin\Repositories\Product\ProductInterface;
use Modules\Admin\Repositories\Property\PropertyInterface;
use Modules\Admin\Repositories\PropertyType\PropertyTypeInterface;
use Modules\Admin\Repositories\Warehouse\WarehouseInterface;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;
    protected $propertyTypeInterface;
    protected $propertyInterface;
    protected $warehouseInterface;

    public function __construct(
        ProductInterface $productInterface,
        CategoryInterface $categoryInterface,
        PropertyTypeInterface $propertyTypeInterface,
        PropertyInterface $propertyInterface,
        WarehouseInterface $warehouseInterface
        ) {
            $this->productInterface = $productInterface;
            $this->categoryInterface = $categoryInterface;
            $this->propertyTypeInterface = $propertyTypeInterface;
            $this->propertyInterface = $propertyInterface;
            $this->warehouseInterface = $warehouseInterface;
    }

    public function getListProducts() {
        return $this->productInterface->getAll();
    }

    public function getCategories() {
        return $this->categoryInterface->getAll();
    }

    public function getPropertyTypeByCategoryId($categoryId) {
        return $this->propertyTypeInterface->getPropertyTypesOfCategory($categoryId);
    }

    public function createProduct(array $data) {
        $productInfo = [
            'title' => $data['title'],
            'category_id' => $data['category_id'],
            'image' => $data['image'],
            'value' => $data['value'],
            'price' => $data['price'],
            'status' => $data['status'],
        ];
        $result = $this->productInterface->create($productInfo);
        if(!empty($result)) {
            $this->warehouseInterface->create([
                'product_id' =>  $result->id,
                'quantity' =>  $data['quantity']
            ]);
            foreach($data['properties'] as $key => $value) {
                $propertyInfo = [
                    'product_id' => $result->id,
                    'property_type_id' => $key,
                    'value' => $value,
                ];
                $this->propertyInterface->create($propertyInfo);
            }
        }
    }

}

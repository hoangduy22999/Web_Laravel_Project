<?php


namespace Modules\Admin\Services;


use App\Repositories\Category\CategoryInterface;
use App\Repositories\Product\AdminProductInterface;
use App\Repositories\Property\PropertyInterface;
use App\Repositories\PropertyType\PropertyTypeInterface;
use App\Repositories\Warehouse\WarehouseInterface;
use Illuminate\Support\Facades\DB;

class ProductService
{
    protected $productInterface;
    protected $categoryInterface;
    protected $propertyTypeInterface;
    protected $propertyInterface;
    protected $warehouseInterface;

    public function __construct(
        AdminProductInterface $productInterface,
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
        DB::beginTransaction();
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
            DB::commit();
        } else {
            DB::rollBack();
        }
    }

}

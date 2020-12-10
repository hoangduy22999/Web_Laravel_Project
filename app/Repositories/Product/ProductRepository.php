<?php


namespace App\Repositories\Product;


use App\Entities\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements AdminProductInterface, WebProductInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Product::class;
    }

    public function getAll()
    {
        return $this->_model->with(['quantity', 'category'])->get();
    }

    public function getAllWithPaginate()
    {
        return $this->_model->with(['category'])->paginate(PER_PAGE);
    }

    public function getProductById($id)
    {
        return $this->_model->with(['category', 'properties'])->find($id);
    }
}


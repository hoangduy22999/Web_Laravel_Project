<?php


namespace App\Repositories\Warehouse;

use App\Entities\Warehouse;
use App\Repositories\BaseRepository;

class WarehouseRepository extends BaseRepository implements WarehouseInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Warehouse::class;
    }

    function getQuantityRemaining($productId)
    {
        return $this->_model->where('product_id', $productId)->pluck('quantity');
    }
}


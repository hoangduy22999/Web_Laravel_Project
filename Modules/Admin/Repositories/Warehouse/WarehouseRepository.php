<?php


namespace Modules\Admin\Repositories\Warehouse;

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
}


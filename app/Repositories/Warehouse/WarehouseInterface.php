<?php


namespace App\Repositories\Warehouse;


interface WarehouseInterface
{
    function create(array $data);

    function getQuantityRemaining($productId);
}

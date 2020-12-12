<?php


namespace App\Repositories\Cart;


interface CartInterface
{
    function create(array $data);

    function getQuantityInCart($userId);

    function getItemByConditions(array $conditions);
}

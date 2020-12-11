<?php


namespace App\Repositories\Category;


use App\Entities\Cart;
use App\Repositories\BaseRepository;
use App\Repositories\Cart\CartInterface;

class CartRepository extends BaseRepository implements CartInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Cart::class;
    }
}

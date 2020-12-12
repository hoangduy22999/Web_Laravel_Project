<?php


namespace App\Repositories\Cart;


use App\Entities\Cart;
use App\Repositories\BaseRepository;

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

    function getQuantityInCart($userId)
    {
        return $this->_model->where('user_id', $userId)->count();
    }

    function getItemByConditions(array $conditions) {
        return $this->_model->where($conditions)->first();
    }

    function getItemsAddByUser($userId)
    {
        return $this->_model->where('user_id', $userId)->with('product')->get();
    }
}

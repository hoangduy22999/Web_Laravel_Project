<?php


namespace Modules\Web\Services;


use App\Repositories\Cart\CartInterface;
use App\Repositories\Warehouse\WarehouseInterface;
use Illuminate\Http\Request;

class CartService
{
    protected $cartInterface;
    protected $warehouseInterface;

    public function __construct(CartInterface $cartInterface, WarehouseInterface $warehouseInterface)
    {
        $this->warehouseInterface = $warehouseInterface;
        $this->cartInterface = $cartInterface;
    }

    public function getQuantityInCart($userId) {
        return $this->cartInterface->getQuantityInCart($userId);
    }

    public function addCart(Request $request, $userId) {
        $where = [
            'user_id' => $userId,
            'product_id' => $request->get('product_id'),
        ];
        $itemInCart = $this->cartInterface->getItemByConditions($where);
        if(empty($itemInCart)) {
            $cartInfo = [
                'quantity' => $request->get('quantity'),
                'promotion_id' => null
            ];
            $cartInfo = array_merge($cartInfo, $where);
            $this->cartInterface->create($cartInfo);
        } else {
            $itemInCart->increment('quantity', $request->quantity);
        }
    }
}

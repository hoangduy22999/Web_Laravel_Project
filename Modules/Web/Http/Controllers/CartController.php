<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Web\Services\CartService;
use Modules\Web\Services\ProductService;

class CartController extends WebBaseController
{
    protected $productService;
    public function __construct(ProductService $productService, CartService $cartService)
    {
        parent::__construct($cartService);
        $this->productService = $productService;
    }


    public function addProductToCart(Request $request) {
        $user = Auth::guard('web')->user();
        if(empty($user)) {
            return response()->json(['status' => false, 'message' => "Bạn cần đăng nhập để có thể thêm vào giỏ hàng!"]);
        }
        $result = $this->productService->checkProductQuantity($request->get('product_id'), $request->get('quantity'));
        if(!$result) {
            return response()->json(['status' => false, 'message' => "Số lượng của sản phẩm hiện tại không đủ. Bạn vui lòng đặt hàng sau!"]);
        }
        $this->cartService->addCart($request, $user->id);
        $quantityInCart = $this->cartService->getQuantityInCart($user->id);
        $cartItem = view('web::layouts.cart-item', compact('quantityInCart'))->render();
        return response()->json(['status' => true, 'cartItem' => $cartItem]);

    }
}

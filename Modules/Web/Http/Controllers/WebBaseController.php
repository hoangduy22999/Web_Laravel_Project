<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Modules\Web\Services\CartService;

class WebBaseController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        $this->middleware(function ($request, $next) {
            $user = Auth::guard('web')->user();
            if(!empty($user)){
                View::share('user', $user);
                $quantityInCart = $this->cartService->getQuantityInCart($user->id);
                View::share('quantityInCart', $quantityInCart);
            }
            return $next($request);
        });

    }
}

<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Web\Services\CartService;
class AccountController extends WebBaseController
{
    public function __construct(CartService $cartService)
    {
        parent::__construct($cartService);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('web::account.order');
    }
}

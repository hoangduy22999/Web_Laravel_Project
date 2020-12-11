<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class WebBaseController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            if(!empty($this->user)){
                View::share('user', $this->user);
            }
            return $next($request);
        });

    }
}

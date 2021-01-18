<?php

namespace Modules\Web\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Modules\Web\Http\Requests\ShippingRequest;
use Modules\Web\Services\CartService;
use DB;
use phpDocumentor\Reflection\Types\Null_;
use Session;
class OrderhistoryController extends WebBaseController
{
    public function order_history(){
        $orders = DB::table('orders')->orderby('id', 'desc')->get();
        return view('web::order_history.order_history')->with('orders', $orders);
    }

    public function remove_order($order_id){
        $user = Auth::guard('web')->user();

        $order_lines_new = DB::table('order_lines')->where('order_id', $order_id)->get();
        foreach ($order_lines_new as $item) {
            $product_id = $item->product_id;
            $warehouse = DB::table('warehouses')->where('product_id', $product_id)->get();
            foreach ($warehouse as $ware){
                $quantity_current = $ware->quantity;
            }
            $quantity_new = $item->quantity + $quantity_current;
            DB::table('warehouses')->where('product_id', $product_id)->update(['quantity'=>$quantity_new]);

        }
        DB::table('orders')->where('id', $order_id)->update(['order_status'=>0]);


        return redirect()->route('web.order_history');

    }

    public function view_ordered($ordered_id){
        $order_lines = DB::table('order_lines')->join('products', 'order_lines.product_id', '=', 'products.id')->where('order_lines.order_id', $ordered_id)->get();
        $orders = DB::table('orders')->where('id', $ordered_id)->get();
        return view('web::order_history.view_ordered')->with('order_lines', $order_lines)->with('orders', $orders);
    }
}


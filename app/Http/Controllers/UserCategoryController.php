<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Goods;
class UserCategoryController extends Controller
{
    public function index()
    {
        $id=\Auth::id();
        $orders = Order::where('user_id',$id)->get();
        foreach ($orders as $order){
            $goods = \App\Goods::where('id',$orders->id)->get();
            $order->goods=$goods;
        }
        return view('User/order', ['Orders' => $orders]);
    }
}

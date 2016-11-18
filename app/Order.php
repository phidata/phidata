<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';

    static function generate($goodsId){
        $user = \Auth::user();
        if($user) {
            $goods = \Goods::find($goodsId);
            if ($goods) {
                try {
                    $order = new Order;
                    $order->user_id = $user->id;
                    $order->goods_id = $goodsId;
                    $order->price = $goods->price;
                    $order->save();
                    return $order;
                } catch (\Exception $e) {
                    return 0;
                }
            }
        }
        return 0;
    }
    public function Goods()
    {
        return $this->belongsTo('Goods','goods_id');
    }
}

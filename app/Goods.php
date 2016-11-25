<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    public function Order()
    {
        return $this->hasOne('App\Order','goods_id');
    }





    /**
     * 获取到和数据包的中间表
     */
    public function data_package()
    {
        return $this->hasOne('App\GoodsDataPackage','goods_id');
    }

    /**
     * 获取商品对应的类别
     */
    public function good_category()
    {
        return $this->belongsTo('App\GoodsCategory','goods_category_id');
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';

    /**
     * 获取关联到数据包
     */
    public function data_package()
    {
        return $this->hasOne('App\DataPackage','goods_id');
    }

    /**
     * 获取商品对应的类别
     */
    public function good_category()
    {
        return $this->belongsTo('App\GoodsCategory','goods_category_id');
    }

}

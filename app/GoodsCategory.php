<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsCategory extends Model
{
    protected $table ='goods_category';

    /**
     * 获取某类别的商品
     */
    

    /**
     * 获取指定某类的所有数据包
     */
    public function data_package()
    {
        return $this->hasManyThrough('App\Goods', 'App\DataPackage','goods_category_id','goods_id');
    }
}

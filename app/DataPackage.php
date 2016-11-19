<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPackage extends Model
{
    //
    protected $table = 'data_package';

    /**
     * 获取数据包对应的商品
     */
    public function good()
    {
        return $this->belongsTo('App\Goods','goods_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','owner_id');
    }

   
}

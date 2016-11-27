<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodsDataPackage extends Model
{
    protected $table ='goods_data_package';

    public function data_package()
    {
        return $this->belongsTo('App\DataPackage','data_package_id');
    }

    public function goods()
    {
        return $this->belongsTo('App\Goods','goods_id');
    }


}

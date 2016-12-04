<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatingTaskGoods extends Model
{
    protected $table ='rating_task_goods';

    public function data_package()
    {
        return $this->belongsTo('App\DataPackage','data_package_id');
    }

    public function goods()
    {
        return $this->belongsTo('App\Goods','goods_id');
    }
}

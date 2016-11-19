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
}

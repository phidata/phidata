<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'goods';
<<<<<<< HEAD
    public function Order()
    {
        return $this->hasOne('App\Order','goods_id');
    }
=======
>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
}

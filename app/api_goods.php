<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class api_goods extends Model
{
    //
    protected $table = 'api_goods';

    public function goods()
    {
        return $this->belongsTo('App\Goods','goods_id');
    }

    public function api_info()
    {
        return $this->belongsTo('App\api_info','api_info_id');
    }
}

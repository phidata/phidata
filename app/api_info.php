<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class api_info extends Model
{
    protected $table = 'api_info';
    public function api_goods(){
        return  $this->hasOne('App\ApiGoods','api_info_id','id');
    }
}

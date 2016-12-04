<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating_task extends Model
{
    protected $table = 'rating_task';
    public function favor_rating_task()
    {
        return $this->hasOne('App\favor_rating_task','rating_task_id','id');
    }

    public function category_rating_task()
    {
        return $this->belongsTo('App\GoodsCategory','goods_category_id');
    }
}
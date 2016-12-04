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
}
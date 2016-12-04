<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favor_rating_task extends Model
{
    protected $table = 'favor_rating_task';
    public function users()
    {
        return $this->belongsTo('App\users','user_id','id');
    }
    public function rating_task()
    {
        return $this->belongsTo('App\Rating_task','rating_task_id','id');
    }
}

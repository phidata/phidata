<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPointRecord extends Model
{
    protected $table ='user_point_record';
    public function record(){
        return $this->belongsTo('App\User','user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    public function user_message(){
        return  $this->hasOne('App\UserMessage','message_id','id');
    }
}

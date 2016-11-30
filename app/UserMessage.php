<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    protected $table = 'user_message';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function message()
    {
        return $this->belongsTo('App\Message','message_id');
    }
}

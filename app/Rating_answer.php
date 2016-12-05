<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating_answer extends Model
{
    protected $table = 'user_rating_answer';
    public function rating_question()
    {
        return $this->belongsTo('App\Rating_question','rating_question_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}

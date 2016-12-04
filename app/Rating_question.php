<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating_question extends Model
{
    protected $table = 'rating_question';
    public function rating_task()
    {
        return $this->belongsTo('App\Rating_task','rating_task_id','id');
    }
    public function user_rating_answer()
    {
        return $this->hasOne('App\Rating_answer','rating_question_id','id');
    }
}

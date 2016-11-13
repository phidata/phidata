<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPoint extends Model
{
    protected $table = 'user_point';

    protected $fillable = [
        'user_id','amount', 'password',
    ];

    public function record(){
        return $this->hasOne('App\UserPointRecord','user_id','user_id');
    }

    public static function consume($id,$amount,$consumption){
        $point = UserPoint::where($id);
        if(!is_null($point)){
            try{
                $point->amount -= $amount;
                $record = new \App\UserPointRecord;
                $record->amount = $amount;
                $record->user_id = $amount;
                $record->consumption = $consumption;
                $point->save();
            }
            catch (\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }
        }
    }
}

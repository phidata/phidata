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

    public static function change($amount,$consumption){
        $user = \Auth::user();
        if($user){
            $point = UserPoint::where('user_id',$user->id)->first();
            if(!is_null($point)){
                try{
                    $point->amount += $amount;
                    $record = new \App\UserPointRecord;
                    $record->amount = $amount;
                    $record->user_id = $user->id;
                    $record->consumption = $consumption;

                    $record->save();
                    $point->save();
                    $info = 'success';
                }
                catch (\Exception $e){
                    $info = 'sqlError';
                }
            }
            else{
                $info = 'invalidPointAccount';
            }
        }
        else{
            $info = 'noLogin';
        }
        return $info;
    }
}

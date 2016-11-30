<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * 获取用户可上传的数据包
     */

    public function data_package()
    {
        return $this->hasMany('App\DataPackage','owner_id');
    }
    public function user_message(){
        return  $this->hasOne('App\UserMessage','user_id');
    }
}

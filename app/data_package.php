<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_package extends Model
{
    protected $table = 'data_package';
    public function application_data_package(){
        return  $this->hasOne('App\application_data_package','data_package_id','id');
    }
}

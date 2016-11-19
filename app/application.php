<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    protected $table ='application';

    public function applicationDataPackage(){
        return $this->hasOne('application_data_package','application_id');
    }

    public function application_data_package()
    {
        return $this->hasOne('App\application_data_package','application_id','id');
    }
}

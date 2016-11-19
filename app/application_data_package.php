<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application_data_package extends Model
{
    protected $table='application_data_package';

    public function applications()
    {
        return $this->belongsTo('App\application','application_id','id');
    }
    public function data_packages()
    {
        return $this->belongsTo('App\data_package','data_package','id');
    }
}

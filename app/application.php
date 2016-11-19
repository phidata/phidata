<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    protected $table ='application';
    public function applicationDataPackage(){
        return $this->hasOne('application_data_package','application_id');
    }
}

<?php

namespace service_control;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
 
    public function user()
    {
        return $this->hasMany('service_control\User');
    }
}

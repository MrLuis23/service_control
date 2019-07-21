<?php

namespace service_control;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	

	public function users()
    {
        return $this->hasMany('service_control\User');
    }
}

<?php

namespace service_control;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'status', 
    ];
 
    public function user()
    {
        return $this->hasMany('service_control\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'name',
    	'city',
    	'phone',
    	'province',
    	'address',
    	'total_hours',
    	'availability'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function haulers()
    {
    	return $this->belongsToMany('App\Hauler');
    }
}

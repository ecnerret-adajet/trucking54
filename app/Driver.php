<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
    	'name',
    	'phone',
    	'operator',
    	'avatar',
    	'availability'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function trucks()
    {
    	return $this->belongsToMany('App\Truck');
    }

}

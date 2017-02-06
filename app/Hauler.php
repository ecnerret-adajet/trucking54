<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hauler extends Model
{
    protected $fillable = [
    	'name',
    	'dispatch_time',
    	'plant_in',
    	'plant_out',
    	'customer_in',
    	'customer_out',
    	'availability',
    	'help',
    ];

    protected $dates = [
    	'dispatch_time',
    	'plant_in',
    	'plant_out',
    	'customer_in',
    	'customer_out',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function trucks()
    {
    	return $this->belongsToMany('App\Truck')->withTimestamps();
    }

    public function getTruckListAttribute()
  	{
  		return $this->trucks->pluck('id')->all();
  	}


    public function customers()
    {
        return $this->belongsToMany('App\Customer')->withTimestamps();
    }

    public function getCustomerListAttribute()
    {
        return $this->customers->pluck('id')->all();
    }

}

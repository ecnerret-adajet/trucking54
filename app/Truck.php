<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = [
    	'plate_number',
    	'operator',
    	'vehicle_type',
    	'capacity',
    	'origin',
    	'vendor_name',
    	'type_goods',
    	'availability'
    ];

    /**
     * belongs to the auth user created a truck
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * associate truck to dispatched hauler
     */
    public function haulers()
    {
    	return $this->belongsToMany('App\Hauler');
    }

}

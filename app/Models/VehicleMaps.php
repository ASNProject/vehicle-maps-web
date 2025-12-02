<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleMaps extends Model
{
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'front_left',
        'front_right',
        'rear_left',
        'rear_right',
        'status_front_left',
        'status_front_right',
        'status_rear_left',
        'status_rear_right',
        'latitude',
        'longitude',
        'speed',
    ];
}

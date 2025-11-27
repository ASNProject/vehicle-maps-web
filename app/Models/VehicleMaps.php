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
        'status',
        'latitude',
        'longitude',
    ];
}

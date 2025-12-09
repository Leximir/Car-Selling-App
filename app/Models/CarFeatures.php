<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'bluetooth_connectivity',
        'leather_seats',
        'gps_navigation',
        'climate_control',
        'rear_parking_sensors',
        'remote_start',
        'cruise_control',
        'heated_seats',
        'power_door_locks',
        'power_windows',
        'air_conditioning',
        'abs'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    use HasFactory;

    protected $primaryKey = 'car_id';
    public $timestamps = false;


    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_start',
        'gps_navigation',
        'heater_seats',
        'climate_control',
        'leather_seats',
        'rear_parking_sensors'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}












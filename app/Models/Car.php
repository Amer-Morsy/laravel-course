<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends EloquentModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

//    protected $guarded = [];

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }

    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function features()
    {
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(CarImage::class)
            ->oldestOfMany('position');
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }


    public function favoritedUsers()
    {
        return $this->belongsToMany(User::class, 'favorite_cars', 'car_id', 'user_id');
    }

    public function getCreatedDate()
    {
        return (new Carbon($this->created_at))->format('Y-m-d ');
    }


}

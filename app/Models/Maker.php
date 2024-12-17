<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;


class Maker extends EloquentModel
{
    use HasFactory;

    protected $table = 'makers';
    public $timestamps = false;
    protected $fillable = ['name'];


    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function models()
    {
        return $this->hasMany(\App\Models\Model::class, 'maker_id');
    }


//    if factory does'nt follow convention
//    protected static function newFactory()
//    {
//        CanMakerFactory::new();
//    }
}

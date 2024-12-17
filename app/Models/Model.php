<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use HasFactory;

    protected $table = 'models';

    public $timestamps = false;
    protected $fillable = ['name', 'maker_id'];

    public function maker()
    {
        $this->belongsTo(Maker::class, 'maker_id');
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}

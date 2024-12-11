<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

//    protected $table = 'fuel_type_table';
//    protected $primaryKey = 'fuel_type_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    const CREATED_AT = 'created_date';
//    const UPDATED_AT = null;

    public $timestamps = false;
    protected $fillable = ['name'];
}


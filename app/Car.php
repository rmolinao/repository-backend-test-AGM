<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_name',
        'car_model',
        'car_brand',
        'car_country'
    ];
}

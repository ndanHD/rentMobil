<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table = 'cars';

    protected $fillable = [
        'brand',
        'model',
        'license_plate',
        'rental_rate_per_day',
        'availability',
    ];
}

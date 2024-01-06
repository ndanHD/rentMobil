<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';




    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'total_cost',
    ];
    //

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function car()
    {
        return $this->belongsTo('App\car', 'car_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $fillable = ['amount', 'arrival_date', 'departure_date', 'driver_id', 'car_id', 'product_id'];

    public function driver()
    {
        return $this->belongsTo(Drivers::class);
    }

    public function car()
    {
        return $this->belongsTo(Cars::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}

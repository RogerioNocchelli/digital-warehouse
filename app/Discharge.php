<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discharge extends Model
{
    protected $fillable = ['starting_quantity', 'final_quantity', 'arrival_date', 'departure_date', 'driver_id', 'car_id', 'product_id'];

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

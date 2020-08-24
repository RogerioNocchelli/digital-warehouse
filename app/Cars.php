<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = ['vehicle_brand', 'vehicle_model', 'vehicle_year_manufacture', 'vehicle_license_plate', 'cart_capacity', 'cart_number_axles', 'is_active'];

    public function charge()
    {
        return $this->hasMany(Charge::class);
    }

    public function discharge()
    {
        return $this->hasMany(Discharge::class);
    }
}

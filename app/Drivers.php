<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $fillable = ['name', 'document_number', 'phone_number', 'zip_code', 'street', 'number', 'neighborhood', 'city', 'state', 'is_active'];

    public function charge()
    {
        return $this->hasMany(Charge::class);
    }

    public function discharge()
    {
        return $this->hasMany(Discharge::class);
    }
}

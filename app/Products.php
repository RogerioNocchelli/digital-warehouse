<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'is_active'];

    public function charge()
    {
        return $this->hasMany(Charge::class);
    }

    public function discharge()
    {
        return $this->hasMany(Discharge::class);
    }
}

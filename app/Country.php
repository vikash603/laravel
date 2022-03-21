<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table="country";

    public function state()
    {
        return $this->hasMany(State::class,'country_id','country_id');
    }

    public function city()
    {
        return $this->hasMany(City::class, 'city_id','city_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['name', 'age', 'sex']; 

    public function bag()
    {
        return $this->hasOne('App\Bag');
    }

    public function location()
    {
        return $this->hasOne('App\Location');
    }
}

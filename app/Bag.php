<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{   
    public function propertys()
    {
        return $this->belongsToMany('App\Property');
    }

    public $timestamps = false;

}

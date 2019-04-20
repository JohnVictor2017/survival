<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = ['name', 'age', 'sex']; 

    public function location()
    {
        return $this->hasOne('App\Models\Location');
    }

    // itens que a pessoa possui
    public function propertys()
    {
        return $this->belongsToMany('App\Models\Property');
    }
}

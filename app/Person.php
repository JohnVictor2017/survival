<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'age', 'latitude', 'longitude']; 
    
    // add relationship location('latitude', 'longitude');
}

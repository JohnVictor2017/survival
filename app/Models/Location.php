<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['latitude', 'longitude']; 

    public $timestamps = false;
}

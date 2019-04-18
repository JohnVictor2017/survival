<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'properties';

    protected $fillable = ['name', 'amount']; 

    public $timestamps = false;
}

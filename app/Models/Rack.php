<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    //
    protected $table="racks";

    protected $fillable = [
        'rack_name', 
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table="customers";

    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_address', 'customer_blood'
    ];
}

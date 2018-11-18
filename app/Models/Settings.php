<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table="settings";

    protected $fillable = [
        'com_name', 'com_logo', 'com_email','com_number','com_address'
    ];


}

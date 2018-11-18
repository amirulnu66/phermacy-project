<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppler extends Model
{
    protected $table="suppliers";

    protected $fillable = [
        'suppler_name', 'suppler_number', 'join_time','company_id',
    ];





    public function company() {

        return $this->hasOne('Company::class');
    }

}

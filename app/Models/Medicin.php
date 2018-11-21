<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicin extends Model
{
    protected $table="medicins";

    protected $fillable = [
        'medi_name', 
        'medi_net_price', 
        'medi_sell_price',
        'medi_box', 
        'medi_quantity', 
        'medi_expire', 
        'company_id', 
        'category_id', 
        'suppler_id'
    ];

}

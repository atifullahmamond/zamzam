<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waskat extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'qad',
        'shana',
        'yakhan',
        'chahati_baghal',
        'kamar',
        'shana_type',
        'jeb_Gul',
        'hip_soorin',
        'jami_quantity',
        'waskat_quantity',
        'kurti_quantity',
        'order_date',
        'finish_date',
        'total_price',
        'paid',
        'remain',
        'tukma',
        'kalar',
        'daman_gol',
    ];

}

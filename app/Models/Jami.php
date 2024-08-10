<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jami extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'qad',
        'astin',
        'shana',
        'yakhan',
        'chahati',
        'baghal',
        'tumban',
        'pacha',
        'pati_widht',
        'pati_height',
        'bar_tumban',
        'qol',
        'kaf',
        'kaf_type',
        'astin_type',
        'kamar',
        'kalar',
        'daman_type',
        'tukma',
        'jeb_roy',
        'jeb_tumban',
        'double_salaie',
        'chamak_tar',
        'double_tak',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurti extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'qad',
        'shana',
        'astin',
        'baghal',
        'kamar',
        'soorin',
        'tir_pesht',
        'bala_tana',
        'bazo',
        'moch',
        'tukma',
        'chak',
        'yakhan',
        'daman',
        'jami_quantity',
        'waskat_quantity',
        'kurti_quantity',
        'order_date',
        'finish_date',
        'total_price',
        'paid',
        'remain',
    ];
}

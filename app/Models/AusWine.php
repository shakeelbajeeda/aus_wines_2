<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AusWine extends Model
{
    use HasFactory;
    protected $fillable = [
        'wine_name',
        'wine_type',
        'wine_qty',
        'wine_price',
        'region'
    ];
}

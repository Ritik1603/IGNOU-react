<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'code',
        'type',
        'value',
        'min_cart_value',
        'expiry_date',
        'status',
    ];

    protected $casts = [
        'value' => 'float',
        'min_cart_value' => 'float',
        'expiry_date' => 'date',
        'status' => 'boolean',
    ];
}

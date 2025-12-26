<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name','phone','subtotal','discount','total','items','coupon'
    ];

    protected $casts = [
        'items' => 'array'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'product_id',
        'quantity',
        'price',
        'options',
        'whatsapp_meta'
    ];

    protected $casts = [
        'price' => 'float',
        'options' => 'array',
        'whatsapp_meta' => 'array', 
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subject_code',
        'subject_name',
        'level',
        'program',
        'material_type',
        'cover_image',
        'format',
        'session',
        'price',
        'discount_price',
        'description_html',
        'meta_title',
        'meta_description',
        'canonical_url',
        'status',
    ];

    protected $casts = [
        'price' => 'float',
        'discount_price' => 'float',
        'status' => 'boolean',
    ];

    public function finalPrice(): float
    {
        return $this->discount_price ?? $this->price;
    }

    public static function existsForSubject(string $material, string $level, string $subjectCode): bool
    {
        return self::where([
            'material_type' => $material,
            'level'         => strtoupper($level),
            'subject_code'  => $subjectCode,
            'status'        => 1,
        ])->exists();
    }

}

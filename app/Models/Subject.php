<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'level_id',
        'code',
        'name',
        'description',
        'meta_title',
        'meta_description',
        'canonical_url'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'subject_code', 'code');
    }

    protected static function booted()
    {
        static::creating(function ($subject) {

            $level = strtoupper($subject->level->name);

            $subject->meta_title ??=
                "{$subject->code} {$subject->name} | IGNOU {$level} Solved Materials";

            $subject->meta_description ??=
                "Download IGNOU {$level} {$subject->code} {$subject->name} solved assignments, guess papers and previous year question papers.";

            $subject->canonical_url ??=
                url("/levels/" . strtolower($subject->level->name));
        });
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name','slug'];


    /**
     * IMPORTANT: enable slug-based route binding
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}

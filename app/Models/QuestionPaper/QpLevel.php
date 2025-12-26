<?php

namespace App\Models\QuestionPaper;

use Illuminate\Database\Eloquent\Model;

class QpLevel extends Model
{
    protected $table = 'qp_levels';

    protected $fillable = [
        'name',
        'slug',
        'display_order',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'status',
    ];

    public function subjects()
    {
        return $this->hasMany(QpSubject::class, 'qp_level_id');
    }
}

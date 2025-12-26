<?php

namespace App\Models\QuestionPaper;

use Illuminate\Database\Eloquent\Model;

class QpSubject extends Model
{
    protected $table = 'qp_subjects';

    protected $fillable = [
        'qp_level_id',
        'subject_code',
        'subject_name',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'canonical_url',
        'status',
    ];

    public function level()
    {
        return $this->belongsTo(QpLevel::class, 'qp_level_id');
    }

    public function papers()
    {
        return $this->hasMany(QpQuestionPaper::class, 'qp_subject_id');
    }
}

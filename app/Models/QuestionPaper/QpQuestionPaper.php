<?php

namespace App\Models\QuestionPaper;

use Illuminate\Database\Eloquent\Model;

class QpQuestionPaper extends Model
{
    protected $table = 'qp_question_papers';

    protected $fillable = [
        'qp_subject_id',
        'qp_session_id',
        'qa_blocks',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'canonical_url',
        'og_image',
        'status',
    ];

    protected $casts = [
        'qa_blocks' => 'array',
    ];


    public function subject()
    {
        return $this->belongsTo(QpSubject::class, 'qp_subject_id');
    }

    public function session()
    {
        return $this->belongsTo(QpSession::class, 'qp_session_id');
    }
}

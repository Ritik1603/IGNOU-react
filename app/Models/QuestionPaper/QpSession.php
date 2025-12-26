<?php

namespace App\Models\QuestionPaper;

use Illuminate\Database\Eloquent\Model;

class QpSession extends Model
{
    protected $table = 'qp_sessions';

    protected $fillable = [
        'name',
        'slug',
        'month',
        'year',
        'status',
    ];

    public function questionPapers()
    {
        return $this->hasMany(
            \App\Models\QuestionPaper\QpQuestionPaper::class,
            'qp_session_id'
        );
    }

}

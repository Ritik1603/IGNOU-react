<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper\QpLevel;
use App\Models\QuestionPaper\QpSubject;
use App\Models\QuestionPaper\QpSession;
use App\Models\QuestionPaper\QpQuestionPaper;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QpFrontendController extends Controller
{
    /**
     * STEP 1: Show Levels (UG / PG / FYUP)
     */
    public function levels()
    {
        return Inertia::render('QuestionPapers/Index', [
            'levels' => QpLevel::where('status', 1)
                ->orderBy('display_order')
                ->get(),
        ]);
    }

    /**
     * STEP 2: Show Subjects under a Level
     */
    public function subjects(QpLevel $level)
    {
        return Inertia::render('QuestionPapers/Level', [
            'level' => $level,
            'subjects' => QpSubject::where('qp_level_id', $level->id)
                ->where('status', 1)
                ->orderBy('subject_code')
                ->get(),
        ]);
    }

    /**
     * STEP 3: Show Question Paper (session via query param)
     */
public function paper(Request $request, QpLevel $level, QpSubject $subject)
{
    // 1️⃣ All sessions that have papers for this subject
    $sessions = QpSession::whereHas('questionPapers', function ($q) use ($subject) {
            $q->where('qp_subject_id', $subject->id)
              ->where('status', 1);
        })
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->get();

    // 2️⃣ Determine active session
    $sessionSlug = $request->query('session')
        ?? $sessions->first()?->slug;

    // 3️⃣ Fetch paper (AUTO LOAD latest if session missing)
    $paper = null;

    if ($sessionSlug) {
        $paper = QpQuestionPaper::where('qp_subject_id', $subject->id)
            ->whereHas('session', function ($q) use ($sessionSlug) {
                $q->where('slug', $sessionSlug);
            })
            ->where('status', 1)
            ->first();
    }

    return Inertia::render('QuestionPapers/Subject', [
        'level' => $level,
        'subject' => $subject,
        'sessions' => $sessions,
        'paper' => $paper,
    ]);
}

}

<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper\QpQuestionPaper;
use App\Models\QuestionPaper\QpSubject;
use App\Models\QuestionPaper\QpSession;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class QpQuestionPaperController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/QuestionPapers/Index', [
            'papers' => QpQuestionPaper::with(['subject', 'session'])->latest()->get(),
            'subjects' => QpSubject::all(),
            'sessions' => QpSession::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/QuestionPapers/Papers', [
            'subjects' => QpSubject::all(),
            'sessions' => QpSession::all(),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'qp_subject_id' => 'required',
            'qp_session_id' => 'required',
            'qa_blocks' => 'required|array|min:1',

            // ✅ SEO
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'canonical_url' => 'nullable',
            'og_image' => 'nullable',
        ]);

        QpQuestionPaper::create([
            'qp_subject_id' => $request->qp_subject_id,
            'qp_session_id' => $request->qp_session_id,
            'qa_blocks' => $request->qa_blocks,
            'slug' => \Str::uuid(),
            'status' => true,

            // ✅ SEO
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'canonical_url' => $request->canonical_url,
            'og_image' => $request->og_image,
        ]);


        return back()->with('success', 'Question paper saved');
    }


    public function edit(QpQuestionPaper $paper)
    {
        return Inertia::render('Admin/QuestionPapers/Edit', [
            'paper' => $paper->load(['subject', 'session']),
            'subjects' => QpSubject::all(),
            'sessions' => QpSession::all(),
        ]);
    }

    public function update(Request $request, QpQuestionPaper $paper)
    {
        $request->validate([
            'qp_subject_id' => 'required',
            'qp_session_id' => 'required',
            'qa_blocks' => 'required|array|min:1',
        ]);

        $paper->update([
            'qp_subject_id' => $request->qp_subject_id,
            'qp_session_id' => $request->qp_session_id,
            'qa_blocks' => $request->qa_blocks,

            // SEO
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'canonical_url' => $request->canonical_url,
            'og_image' => $request->og_image,
        ]);

        return back()->with('success', 'Question paper updated successfully');
    }

}

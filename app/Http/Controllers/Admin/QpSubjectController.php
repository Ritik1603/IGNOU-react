<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper\QpLevel;
use App\Models\QuestionPaper\QpSubject;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class QpSubjectController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/QuestionPapers/Subjects', [
            'subjects' => QpSubject::with('level')->latest()->get(),
            'levels' => QpLevel::where('status', 1)->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'qp_level_id' => 'required',
            'subject_code' => 'required',
            'subject_name' => 'required'
        ]);

        QpSubject::create([
            'qp_level_id' => $request->qp_level_id,
            'subject_code' => $request->subject_code,
            'subject_name' => $request->subject_name,
            'slug' => Str::slug($request->subject_code),
        ]);

        return back();
    }
}

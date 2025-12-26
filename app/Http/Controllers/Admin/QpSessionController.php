<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper\QpSession;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class QpSessionController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/QuestionPapers/Sessions', [
            'sessions' => QpSession::orderBy('year', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required',
            'year' => 'required'
        ]);

        QpSession::create([
            'name' => $request->month . ' ' . $request->year,
            'slug' => Str::slug($request->month . '-' . $request->year),
            'month' => $request->month,
            'year' => $request->year
        ]);

        return back();
    }
}

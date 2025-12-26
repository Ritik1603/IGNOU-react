<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\QpSubjectImport;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class QpImportController extends Controller
{
    /**
     * SHOW IMPORT PAGE
     */
    public function index()
    {
        return Inertia::render('Admin/QuestionPapers/Import');
    }

    /**
     * HANDLE EXCEL UPLOAD
     */
    public function importSubjects(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new QpSubjectImport, $request->file('file'));

        return back()->with('success', 'Subjects imported successfully.');
    }
}

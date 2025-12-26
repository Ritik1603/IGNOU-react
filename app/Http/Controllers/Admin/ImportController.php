<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SubjectImport;

class ImportController extends Controller
{
    public function show()
    {
        return inertia('Admin/Import');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        // Import Levels + Subjects
        Excel::import(new SubjectImport, $request->file('file'));

        return back()->with('success', 'UG / PG Subjects imported successfully');
    }
}

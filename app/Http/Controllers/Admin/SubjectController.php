<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Level;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Subjects/Index', [
            'subjects' => Subject::with('level')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Subjects/Create', [
            'levels' => Level::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'level_id' => 'required',
            'code' => 'required',
            'name' => 'required'
        ]);

        $subject = Subject::create($request->only('level_id','code','name','description'));

        // foreach ([
        //     'solved-assignments',
        //     'guess-papers',
        //     'previous-year-papers'
        // ] as $type) {

        //     Product::create([
        //         'title' => "{$subject->code} {$type}",
        //         'slug' => Str::slug($subject->code.'-'.$type),
        //         'subject_code' => $subject->code,
        //         'subject_name' => $subject->name,
        //         'level' => $subject->level->name,
        //         'program' => 'IGNOU',
        //         'material_type' => $type,
        //         'session' => 'June 2025',
        //         'price' => 0,
        //         'status' => 0
        //     ]);
        // }

        return redirect('/admin/subjects');
    }

    public function show(Subject $subject)
    {
        return Inertia::render('Admin/Subjects/Show', [
            'subject' => $subject->load('level')
        ]);
    }
}

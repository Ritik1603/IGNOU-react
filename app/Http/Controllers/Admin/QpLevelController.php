<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionPaper\QpLevel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class QpLevelController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/QuestionPapers/Levels', [
            'levels' => QpLevel::orderBy('display_order')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        QpLevel::create([
            'name' => strtoupper($request->name),
            'slug' => Str::slug($request->name),
        ]);

        return back();
    }
}

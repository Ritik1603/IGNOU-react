<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Product;
use Inertia\Inertia;

class SubjectController extends Controller
{
    /**
     * List subjects of a level
     * /levels/ug
     */
    public function index(Level $level)
    {
        return Inertia::render('Subjects/Index', [
            'level'    => $level->name,
            'levelSlug'=> $level->slug,
            'subjects' => Subject::where('level_id', $level->id)
                ->orderBy('code')
                ->get(['id', 'code', 'name']),
        ]);
    }

    /**
     * Subject → material selection
     * /levels/ug/BCA-101
     */
public function show(Level $level, Subject $subject)
{
    $products = Product::where('subject_code', $subject->code)
        ->where('status', 1)
        ->orderByDesc('session') // latest first
        ->get()
        ->groupBy('material_type');

    return Inertia::render('Subjects/Show', [
        'level'      => $level->name,
        'levelSlug'  => strtolower($level->slug),
        'subject'    => $subject,
        'productsByMaterial' => $products,
    ]);
}


}

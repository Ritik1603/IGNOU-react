<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Subject;
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
        $allMaterials = [
            'solved-assignments',
            'guess-papers',
            'previous-year-papers',
            'notes',
        ];

        // Filter only available materials
        $availableMaterials = array_values(array_filter(
            $allMaterials,
            fn ($material) =>
                \App\Models\Product::existsForSubject(
                    $material,
                    $level->slug,      // ug / pg
                    $subject->code     // BCOC-132
                )
        ));

        return Inertia::render('Subjects/Show', [
            'level'      => strtoupper($level->slug),
            'levelSlug'  => $level->slug,
            'subject'    => $subject,
            'materials'  => $availableMaterials,
        ]);
    }

}

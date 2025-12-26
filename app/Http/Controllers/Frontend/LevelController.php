<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Inertia\Inertia;

class LevelController extends Controller
{
    /**
     * Show subjects under a level (UG / PG)
     * URL: /levels/{level}
     */
    public function show(Level $level)
    {
        return Inertia::render('Subjects/Index', [
            'level' => [
                'name' => $level->name,
                'slug' => $level->slug,
            ],
            'subjects' => $level->subjects()
                ->orderBy('code')
                ->get(['code', 'name']),
        ]);
    }
}

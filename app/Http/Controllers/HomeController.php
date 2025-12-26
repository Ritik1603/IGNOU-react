<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\QuestionPaper\QpLevel;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'levels' => Level::orderBy('name')->get([
                'id',
                'name',
                'slug',
            ]),

                // ✅ Question Paper levels (NEW)
            'qpLevels' => QpLevel::where('status', 1)
                ->orderBy('display_order')
                ->get(),

            'canLogin'    => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Models\QuestionPaper\QpLevel;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [

            'auth' => [
                'user' => $request->user(),
            ],

            // ✅ GLOBAL SHARED DATA
            'qpLevels' => QpLevel::where('status', 1)
                ->orderBy('display_order')
                ->get(),

        ]);
    }
}

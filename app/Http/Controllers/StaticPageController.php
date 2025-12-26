<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Inertia\Inertia;

class StaticPageController extends Controller
{
    public function show($page)
    {
        $path = resource_path("views/internal/{$page}.blade.php");

        abort_unless(file_exists($path), 404);

        $html = view("internal.$page")->render();

        return Inertia::render('StaticPage', [
            'html' => $html,
            'seo' => [
                'title' => ucwords(str_replace('-', ' ', $page)),
                'description' => '',
            ],
        ]);
    }
}


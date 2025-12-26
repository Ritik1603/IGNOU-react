<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Levels/Index', [
            'levels' => Level::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Levels/Create');
    }

    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);

        Level::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('/admin/levels');
    }
}

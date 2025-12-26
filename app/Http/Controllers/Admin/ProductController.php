<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Products/Index', [
            'products' => Product::latest()->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Products/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'subject_code' => 'required',
            'subject_name' => 'required',
            'level' => 'required',
            'program' => 'required',
            'material_type' => 'required',
            'session' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'description_html' => 'nullable',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')
                ->store('products', 'public');
        }

        $data['slug'] = Str::slug(
            $data['subject_code'].'-'.$data['material_type']
        );

        Product::create($data);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return Inertia::render('Admin/Products/Edit', [
            'product' => $product,
            'enums' => [
                'level' => ['UG','PG','Diploma'],
                'format' => ['softcopy','hardcopy'],
                // Put your REAL enum values here:
                'material_type' => [
                    'solved-assignments',
                    'guess-papers',
                    'question-papers',
                    'previous-year-papers',
                    'sample-papers',
                    'lab-manuals',
                ],
            ],
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'subject_code' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'level' => 'required|in:UG,PG,Diploma',
            'program' => 'nullable|string|max:255',

            'material_type' => 'required|string|max:255',
            'format' => 'required|in:softcopy,hardcopy',
            'session' => 'required|string|max:255',

            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',

            'description_html' => 'nullable|string',

            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',

            'status' => 'required|in:0,1',

            'cover_image' => 'nullable|image|max:2048',
        ]);

        $data['status'] = (int) $data['status'];

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product updated successfully');
    }



    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}

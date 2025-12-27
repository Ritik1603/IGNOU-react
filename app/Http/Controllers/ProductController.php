<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
    use App\Models\Subject;

class ProductController extends Controller
{
    /**
     * List products by material type
     * Supports:
     *  - /materials/solved-assignments
     *  - /materials/solved-assignments?level=ug
     *  - /materials/solved-assignments?level=ug&subject=BCA-101
     */
    public function materialIndex(string $material)
    {
        $level   = request('level');    // ug / pg (optional)
        $subject = request('subject');  // BAG-HIS (optional)

        $query = Product::query()
            ->where('material_type', $material)
            ->where('status', 1);

        if ($level) {
            $query->where('level', strtoupper($level));
        }

        if ($subject) {
            $query->where('subject_code', $subject);
        }

        // 🔑 KEY FIX: pick ONE product per subject (latest session)
        $products = $query
            ->orderBy('subject_code')
            ->orderByDesc('created_at') // latest session first
            ->get()
            ->unique('subject_code')    // ⬅️ THIS IS THE MAGIC
            ->groupBy('level');

        return Inertia::render('Product/MaterialIndex', [
            'material'        => $material,
            'productsByLevel' => $products,
            'filters' => [
                'level'   => $level,
                'subject' => $subject,
            ],
        ]);
    }



    /**
     * Product detail page
     * URL: /materials/{material}/{level}/{slug}
     */
    // public function show(string $material, string $level, string $slug)
    // {
    //     $product = Product::where([
    //         'material_type' => $material,
    //         'level'         => strtoupper($level),
    //         'slug'          => $slug,
    //         'status'        => 1,
    //     ])->firstOrFail();

    //     // ✅ Add a proper public URL for the stored image (public disk)
    //     $product->cover_image_url = $product->cover_image
    //         ? asset('storage/' . ltrim($product->cover_image, '/'))
    //         : null;

    //     return Inertia::render('Product/Show', [
    //         'product' => $product,
    //     ]);
    // }

    public function show(string $material, string $level, string $slug)
    {
        $product = Product::where([
            'material_type' => $material,
            'level'         => strtoupper($level),
            'slug'          => $slug,
            'status'        => 1,
        ])->firstOrFail();

        $siblings = Product::where([
            'subject_code'  => $product->subject_code,
            'material_type'=> $product->material_type,
            'level'        => $product->level,
            'status'       => 1,
        ])
        ->orderByDesc('session')
        ->get(['id', 'session', 'slug']);

        $product->cover_image_url = $product->cover_image
            ? asset('storage/' . ltrim($product->cover_image, '/'))
            : null;

        $availableMaterialTypes = Product::where('subject_code', $product->subject_code)
            ->where('level', $product->level)
            ->where('session', $product->session)
            ->pluck('material_type')
            ->unique()
            ->values();

        $variants = Product::variantsOf($product)
            ->get([
                'id',
                'material_type',
                'session',
                'price',
                'discount_price',
                'slug',
                'cover_image'
            ])
            ->map(function ($v) {
                return [
                    'id' => $v->id,
                    'material_type' => $v->material_type,
                    'session' => $v->session,
                    'price' => $v->price,
                    'discount_price' => $v->discount_price,
                    'slug' => $v->slug,
                    'cover_image_url' => $v->cover_image
                        ? asset('storage/' . ltrim($v->cover_image, '/'))
                        : null,
                ];
            });





        return Inertia::render('Product/Show', [
            'product'  => $product,
            'sessions' => $siblings,
            'availableMaterialTypes' => $availableMaterialTypes,
            'variants' => $variants
        ]);
    }

}

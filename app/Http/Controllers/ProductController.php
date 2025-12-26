<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

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
        $subject = request('subject');  // BCA-101 (optional)

        $query = Product::query()
            ->where('material_type', $material)
            ->where('status', 1);

        // Filter by level if provided
        if ($level) {
            $query->where('level', strtoupper($level));
        }

        // Filter by subject code if provided
        if ($subject) {
            $query->where('subject_code', $subject);
        }

        $products = $query
            ->orderBy('subject_code')
            ->get()
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
    public function show(string $material, string $level, string $slug)
    {
        $product = Product::where([
            'material_type' => $material,
            'level'         => strtoupper($level),
            'slug'          => $slug,
            'status'        => 1,
        ])->firstOrFail();

        // ✅ Add a proper public URL for the stored image (public disk)
        $product->cover_image_url = $product->cover_image
            ? asset('storage/' . ltrim($product->cover_image, '/'))
            : null;

        return Inertia::render('Product/Show', [
            'product' => $product,
        ]);
    }

}

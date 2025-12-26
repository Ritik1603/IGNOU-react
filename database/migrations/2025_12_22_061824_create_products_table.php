<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Academic identity
            $table->string('title');                 // BCOC-136 Solved Assignment
            $table->string('slug')->unique();        // bcoc-136-solved-assignment
            $table->string('subject_code');          // BCOC-136
            $table->string('subject_name');          // Financial Accounting

            $table->enum('level', ['UG','PG','Diploma']);
            $table->string('program');               // BA, BCOM, MA, etc.

            // Material type
            $table->enum('material_type', [
                'solved-assignments',
                'guess-papers',
                'previous-year-papers'
            ]);

            // Product presentation
            $table->string('cover_image')->nullable(); // subject cover image
            $table->enum('format', ['softcopy','hardcopy'])->default('softcopy');
            $table->string('session');                // June 2025 / Dec 2025

            // Pricing
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();

            // Content
            $table->longText('description_html')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('canonical_url')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

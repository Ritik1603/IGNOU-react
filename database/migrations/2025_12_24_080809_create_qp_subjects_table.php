<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qp_subjects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('qp_level_id')
                  ->constrained('qp_levels')
                  ->cascadeOnDelete();

            $table->string('subject_code');     // MEG-1
            $table->string('subject_name');     // British Poetry
            $table->string('slug')->unique();   // meg-1

            // SEO
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('canonical_url')->nullable();

            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->index(['qp_level_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qp_subjects');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qp_levels', function (Blueprint $table) {
            $table->id();

            $table->string('name');              // UG / PG / FYUP
            $table->string('slug')->unique();    // ug / pg / fyup
            $table->integer('display_order')->default(0);

            // SEO
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qp_levels');
    }
};

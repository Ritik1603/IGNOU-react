<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qp_question_papers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('qp_subject_id')
                  ->constrained('qp_subjects')
                  ->cascadeOnDelete();

            $table->foreignId('qp_session_id')
                  ->constrained('qp_sessions')
                  ->cascadeOnDelete();

            // CONTENT (TEXT-BASED PAPER)
            $table->longText('question_html');      // question paper body
            $table->longText('answer_html')->nullable();

            // SEO (FULL CONTROL)
            $table->string('slug')->unique();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('og_image')->nullable();

            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->index(['qp_subject_id', 'qp_session_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qp_question_papers');
    }
};

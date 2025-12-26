<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('qp_question_papers', function (Blueprint $table) {
            $table->dropColumn(['question_html', 'answer_html']);
        });
    }

    public function down(): void
    {
        Schema::table('qp_question_papers', function (Blueprint $table) {
            $table->longText('question_html');
            $table->longText('answer_html')->nullable();
        });
    }

};

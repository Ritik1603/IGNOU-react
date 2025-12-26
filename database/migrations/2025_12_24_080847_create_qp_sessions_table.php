<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('qp_sessions', function (Blueprint $table) {
            $table->id();

            $table->string('name');           // June 2025
            $table->string('slug')->unique(); // june-2025
            $table->string('month');          // June
            $table->year('year');             // 2025

            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('qp_sessions');
    }
};

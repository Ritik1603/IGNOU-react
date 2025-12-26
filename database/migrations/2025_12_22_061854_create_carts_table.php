<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            // User OR Guest
            $table->foreignId('user_id')->nullable()
                  ->constrained()->cascadeOnDelete();

            $table->string('session_id')->nullable();

            // Product
            $table->foreignId('product_id')
                  ->constrained()->cascadeOnDelete();

            $table->integer('quantity')->default(1);

            // Snapshot pricing (important)
            $table->decimal('price', 8, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function ($table) {
            $table->id();

            $table->string('name');
            $table->string('phone');

            $table->decimal('subtotal',8,2);
            $table->decimal('discount',8,2)->default(0);
            $table->decimal('total',8,2);

            $table->json('items'); // snapshot
            $table->string('coupon')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

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
        Schema::create('gift_cards', function (Blueprint $table) {
             $table->id();
            $table->integer('merchant_id');
            $table->string('code')->unique();
            $table->decimal('amount', 10, 2);
            $table->decimal('balance', 10, 2)->default(0);
            $table->integer('usage_limit')->nullable(); // Max uses allowed
            $table->integer('used_count')->default(0);
            $table->enum('status', ['active', 'used', 'expired', 'disabled'])->default('active');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gift_cards');
    }
};

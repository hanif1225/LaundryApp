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
        Schema::create('laundries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id');
            $table->foreignId('price_id');
            $table->string('tag_number')->unique();
            $table->string('type');
            $table->float('weight', 10,5)->nullable();
            $table->integer('total_item')->nullable();
            $table->text('item')->nullable();
            $table->string('status')->nullable();
            $table->date('date_of_entry')->nullable();
            $table->date('completion_date')->nullable();
            $table->date('date_taken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundries');
    }
};

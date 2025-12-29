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
        Schema::create('high_levels', function (Blueprint $table) {
            $table->id();
            $table->enum('name',['easy','medium','high']);
            $table->integer('total_question');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->integer('ball');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('high_levels');
    }
};

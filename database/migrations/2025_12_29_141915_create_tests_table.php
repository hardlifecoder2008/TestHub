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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->enum('method',['public','private']);
            $table->text('test_title');
            $table->foreignId('owner_id')->constrained('users')->cascadeOnDelete();
            $table->integer('code');
            $table->dateTime('tile_limit');
            $table->integer('max_ball');
            $table->foreignId('high_level')->constrained("high_levels",'id')->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};

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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            // $table->foreignId('meal_type_id')->constrained();
            $table->integer('meal_type_id');
            // $table->foreignId('difficulty_id')->constrained();
            $table->integer('difficulty_id');
            $table->integer('servings');
            $table->string('photo_url')->nullable();
            // $table->foreignId('source_id')->constrained();
            $table->integer('source_id');
            $table->foreignId('user_id')->constrained();
            $table->string('source_recipe_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};

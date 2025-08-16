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
        Schema::create('welcome_contents', function (Blueprint $table) {
            $table->id();
            // Hero Section
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('hero_background_image')->nullable();
            
            // Features Section
            $table->string('feature_1_title');
            $table->text('feature_1_description');
            $table->string('feature_2_title');
            $table->text('feature_2_description');
            $table->string('feature_3_title');
            $table->text('feature_3_description');
            $table->string('feature_4_title');
            $table->text('feature_4_description');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcome_contents');
    }
};

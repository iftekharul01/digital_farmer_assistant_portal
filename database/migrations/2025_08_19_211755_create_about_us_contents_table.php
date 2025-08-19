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
        Schema::create('about_us_contents', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('hero_background_image')->nullable();
            $table->text('our_motivation')->nullable();
            $table->text('our_mission')->nullable();
            $table->text('our_vision')->nullable();
            $table->text('what_we_value')->nullable();
            $table->json('team_members')->nullable(); // Store team members as JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_contents');
    }
};

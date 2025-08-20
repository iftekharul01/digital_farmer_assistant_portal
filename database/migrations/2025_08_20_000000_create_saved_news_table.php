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
        Schema::create('saved_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('link');
            $table->string('image_url')->nullable();
            $table->string('source_id')->nullable();
            $table->string('pub_date')->nullable();
            $table->string('category')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('registrations')->onDelete('cascade');
            $table->unique(['user_id', 'link']); // Prevent duplicate saves by same user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_news');
    }
};

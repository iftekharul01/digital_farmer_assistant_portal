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
        Schema::create('product_prices', function (Blueprint $table) {
            $table->id();
            $table->string('crop_category');
            $table->string('crop_name');
            $table->string('variety_type')->nullable();
            $table->decimal('current_price', 8, 2);
            $table->decimal('previous_price', 8, 2)->nullable();
            $table->string('market_location');
            $table->string('quality_grade');
            $table->text('market_remarks')->nullable();
            $table->string('product_image')->nullable();
            $table->string('unit')->default('kg');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_prices');
    }
};

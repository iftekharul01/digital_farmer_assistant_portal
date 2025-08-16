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
        Schema::table('product_prices', function (Blueprint $table) {
            // Add unit column if it doesn't exist
            if (!Schema::hasColumn('product_prices', 'unit')) {
                $table->string('unit')->default('কেজি');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_prices', function (Blueprint $table) {
            // Drop unit column if it exists
            if (Schema::hasColumn('product_prices', 'unit')) {
                $table->dropColumn('unit');
            }
        });
    }
};

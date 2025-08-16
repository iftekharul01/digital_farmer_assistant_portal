<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Fix any existing product images that have full path stored
        DB::table('product_prices')
            ->where('product_image', 'like', 'storage/assets/product_images/%')
            ->update([
                'product_image' => DB::raw("SUBSTRING(product_image, LENGTH('storage/assets/product_images/') + 1)")
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverse the change - add back the full path
        DB::table('product_prices')
            ->whereNotNull('product_image')
            ->where('product_image', '!=', '')
            ->where('product_image', 'not like', 'storage/assets/product_images/%')
            ->update([
                'product_image' => DB::raw("CONCAT('storage/assets/product_images/', product_image)")
            ]);
    }
};

<?php
// Debug script to check product images

require_once 'vendor/autoload.php';

// Boot Laravel
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Check products
$products = \App\Models\ProductPrice::all(['id', 'crop_name', 'product_image']);

echo "Total products: " . $products->count() . "\n\n";

foreach ($products as $product) {
    echo "ID: {$product->id}\n";
    echo "Name: {$product->crop_name}\n";
    echo "Image: " . ($product->product_image ?: 'NULL') . "\n";
    
    if ($product->product_image) {
        $imagePath = storage_path('app/public/assets/product_images/' . $product->product_image);
        echo "File exists: " . (file_exists($imagePath) ? 'YES' : 'NO') . "\n";
        echo "Full path: {$imagePath}\n";
    }
    echo "---\n";
}

// Check directory
$dir = storage_path('app/public/assets/product_images');
echo "\nDirectory: {$dir}\n";
echo "Directory exists: " . (is_dir($dir) ? 'YES' : 'NO') . "\n";

if (is_dir($dir)) {
    $files = scandir($dir);
    echo "Files in directory:\n";
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo "- {$file}\n";
        }
    }
}

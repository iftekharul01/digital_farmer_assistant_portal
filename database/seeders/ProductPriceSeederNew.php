<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductPrice;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $products = [
            [
                'crop_category' => 'ধান',
                'crop_name' => 'চাল',
                'variety_type' => 'বাসমতি',
                'current_price' => 48.50,
                'previous_price' => 47.20,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'চাহিদা বৃদ্ধির কারণে দাম বেড়েছে',
                'product_image' => 'storage/assets/product_images/rice_basmati.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ধান',
                'crop_name' => 'চাল',
                'variety_type' => 'BR28',
                'current_price' => 42.00,
                'previous_price' => 43.50,
                'market_location' => 'চট্টগ্রাম',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'নতুন ফসল আসায় দাম কমেছে',
                'product_image' => 'storage/assets/product_images/rice_br28.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'গম',
                'crop_name' => 'গম',
                'variety_type' => 'স্থানীয়',
                'current_price' => 35.75,
                'previous_price' => 35.75,
                'market_location' => 'সিলেট',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'দাম স্থিতিশীল',
                'product_image' => 'storage/assets/product_images/wheat_local.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ভুট্টা',
                'crop_name' => 'ভুট্টা',
                'variety_type' => 'মিষ্টি ভুট্টা',
                'current_price' => 28.20,
                'previous_price' => 26.80,
                'market_location' => 'রাজশাহী',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'রপ্তানি চাহিদা বেড়েছে',
                'product_image' => 'storage/assets/product_images/corn_sweet.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'আলু',
                'variety_type' => 'ডায়মন্ড',
                'current_price' => 25.00,
                'previous_price' => 28.25,
                'market_location' => 'খুলনা',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'মৌসুমী সরবরাহ বৃদ্ধি',
                'product_image' => 'storage/assets/product_images/potato_diamond.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'পেঁয়াজ',
                'variety_type' => 'স্থানীয় লাল',
                'current_price' => 55.00,
                'previous_price' => 58.25,
                'market_location' => 'বরিশাল',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'নতুন আমদানি এসেছে',
                'product_image' => 'storage/assets/product_images/onion_red.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'রসুন',
                'variety_type' => 'চাইনিজ',
                'current_price' => 120.00,
                'previous_price' => 115.50,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'আমদানি খরচ বেড়েছে',
                'product_image' => 'storage/assets/product_images/garlic_chinese.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'টমেটো',
                'variety_type' => 'হাইব্রিড',
                'current_price' => 35.50,
                'previous_price' => 40.20,
                'market_location' => 'চট্টগ্রাম',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'স্থানীয় উৎপাদন বেড়েছে',
                'product_image' => 'storage/assets/product_images/tomato_hybrid.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ডাল',
                'crop_name' => 'মসুর ডাল',
                'variety_type' => 'দেশি',
                'current_price' => 85.00,
                'previous_price' => 82.50,
                'market_location' => 'সিলেট',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'চাহিদা অনুযায়ী সরবরাহ কম',
                'product_image' => 'storage/assets/product_images/lentil_local.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ডাল',
                'crop_name' => 'ছোলার ডাল',
                'variety_type' => 'আমদানিকৃত',
                'current_price' => 95.50,
                'previous_price' => 94.00,
                'market_location' => 'রাজশাহী',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'আমদানি শুল্ক বৃদ্ধি',
                'product_image' => 'storage/assets/product_images/chickpea_imported.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'তেল',
                'crop_name' => 'সরিষার তেল',
                'variety_type' => 'খাঁটি',
                'current_price' => 150.00,
                'previous_price' => 145.75,
                'market_location' => 'খুলনা',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'কাঁচামালের দাম বেড়েছে',
                'product_image' => 'storage/assets/product_images/mustard_oil.jpg',
                'unit' => 'লিটার'
            ],
            [
                'crop_category' => 'মসলা',
                'crop_name' => 'মরিচ',
                'variety_type' => 'কাঁচা মরিচ',
                'current_price' => 60.00,
                'previous_price' => 55.25,
                'market_location' => 'বরিশাল',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'মৌসুম শেষ হওয়ায় দাম বেড়েছে',
                'product_image' => 'storage/assets/product_images/chili_green.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'মসলা',
                'crop_name' => 'ধনিয়া',
                'variety_type' => 'শুকনো',
                'current_price' => 180.00,
                'previous_price' => 175.50,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'গুণমানের জন্য চাহিদা বেশি',
                'product_image' => 'storage/assets/product_images/coriander_dry.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ফল',
                'crop_name' => 'আম',
                'variety_type' => 'হিমসাগর',
                'current_price' => 80.00,
                'previous_price' => 75.00,
                'market_location' => 'চাঁপাইনবাবগঞ্জ',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'মৌসুমের শুরুতে দাম বেশি',
                'product_image' => 'storage/assets/product_images/mango_himsagar.jpg',
                'unit' => 'কেজি'
            ],
            [
                'crop_category' => 'ফল',
                'crop_name' => 'কলা',
                'variety_type' => 'সবরি',
                'current_price' => 45.00,
                'previous_price' => 42.50,
                'market_location' => 'যশোর',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'পরিবহন খরচ বৃদ্ধি',
                'product_image' => 'storage/assets/product_images/banana_sabri.jpg',
                'unit' => 'ডজন'
            ]
        ];

        foreach ($products as $product) {
            ProductPrice::create($product);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductPrice;

class ProductPriceSeederClean extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'crop_category' => 'ধান',
                'crop_name' => 'চাল',
                'variety_type' => 'বাসমতি',
                'current_price' => 65.00,
                'previous_price' => 62.00,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'উৎকৃষ্ট মানের চাল, চাহিদা বেশি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'আলু',
                'variety_type' => 'কার্ডিনাল',
                'current_price' => 35.00,
                'previous_price' => 38.00,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'নতুন ফসল আসায় দাম কমেছে',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'পেঁয়াজ',
                'variety_type' => 'লাল পেঁয়াজ',
                'current_price' => 45.00,
                'previous_price' => 42.00,
                'market_location' => 'চট্টগ্রাম',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'আমদানি কমায় দাম বৃদ্ধি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'ডাল',
                'crop_name' => 'মসুর ডাল',
                'variety_type' => 'দেশি',
                'current_price' => 120.00,
                'previous_price' => 115.00,
                'market_location' => 'রাজশাহী',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'প্রোটিনের চাহিদা বৃদ্ধি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'ফল',
                'crop_name' => 'আম',
                'variety_type' => 'ল্যাংড়া',
                'current_price' => 80.00,
                'previous_price' => 75.00,
                'market_location' => 'সিলেট',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'মৌসুমের শেষে দাম বৃদ্ধি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'গম',
                'crop_name' => 'গম',
                'variety_type' => 'শতাব্দী',
                'current_price' => 42.00,
                'previous_price' => 40.00,
                'market_location' => 'খুলনা',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'আটার চাহিদা স্থিতিশীল',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'ভুট্টা',
                'crop_name' => 'ভুট্টা',
                'variety_type' => 'হাইব্রিড',
                'current_price' => 28.00,
                'previous_price' => 30.00,
                'market_location' => 'বরিশাল',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'পশুখাদ্যের চাহিদা কম',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'তেল',
                'crop_name' => 'সরিষার তেল',
                'variety_type' => 'খাঁটি',
                'current_price' => 165.00,
                'previous_price' => 160.00,
                'market_location' => 'রংপুর',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'কাঁচামাল দাম বৃদ্ধি',
                'product_image' => null,
                'unit' => 'লিটার',
                'status' => true
            ],
            [
                'crop_category' => 'মসলা',
                'crop_name' => 'হলুদ',
                'variety_type' => 'গুঁড়া',
                'current_price' => 280.00,
                'previous_price' => 270.00,
                'market_location' => 'ময়মনসিংহ',
                'quality_grade' => 'প্রিমিয়াম',
                'market_remarks' => 'রপ্তানি চাহিদা বৃদ্ধি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ],
            [
                'crop_category' => 'সবজি',
                'crop_name' => 'টমেটো',
                'variety_type' => 'হাইব্রিড',
                'current_price' => 55.00,
                'previous_price' => 50.00,
                'market_location' => 'ঢাকা',
                'quality_grade' => 'স্ট্যান্ডার্ড',
                'market_remarks' => 'শীতের প্রস্তুতি, চাহিদা বৃদ্ধি',
                'product_image' => null,
                'unit' => 'কেজি',
                'status' => true
            ]
        ];

        foreach ($products as $product) {
            ProductPrice::create($product);
        }
    }
}

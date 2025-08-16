<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WelcomeContent;

class WelcomeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WelcomeContent::create([
            // Hero Section - Bengali Translation
            'hero_title' => 'স্মার্ট প্রযুক্তির সাথে কৃষকদের ক্ষমতায়ন',
            'hero_subtitle' => 'ফসলের স্বাস্থ্য, বাজার অন্তর্দৃষ্টি, আবহাওয়া আপডেট এবং সরকারি সহায়তার জন্য আপনার এক-স্টপ সমাধান। সবকিছু এক জায়গায়, শুধুমাত্র আপনার জন্য।',
            'hero_background_image' => 'agri2.jpg',
            
            // Features Section - Bengali Translation
            'feature_1_title' => 'স্মার্ট চাষাবাদ',
            'feature_1_description' => 'AI দিয়ে তাৎক্ষণিকভাবে রোগ সনাক্ত করুন এবং আপনার ফসল কার্যকরভাবে রক্ষা করার জন্য কার্যকর পদক্ষেপ নিন।',
            
            'feature_2_title' => 'লাইভ আবহাওয়া ট্র্যাকিং',
            'feature_2_description' => 'বীজ বপন, ফসল কাটা এবং সেচের সময়সূচী ভালভাবে পরিকল্পনা করতে স্থানীয় পূর্বাভাস দেখুন।',
            
            'feature_3_title' => 'সরকারি ভর্তুকি',
            'feature_3_description' => 'কখনও সুযোগ হাতছাড়া করবেন না — উপলব্ধ সরকারি সহায়তা দেখুন, ট্র্যাক করুন এবং আবেদন করুন।',
            
            'feature_4_title' => 'আধুনিক চাষাবাদ শিখুন',
            'feature_4_description' => 'উন্নত কৃষি অনুশীলনের জন্য বিশেষজ্ঞ টিউটোরিয়াল, গাইড এবং ভিডিওতে অ্যাক্সেস পান।'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;
use Carbon\Carbon;

class AnnouncementSeederNew extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $announcements = [
            [
                'category' => 'event',
                'title' => 'জাতীয় জৈব কৃষি সপ্তাহ ২০২৫',
                'subtitle' => 'দেশব্যাপী জৈব কৃষি প্রচারণা কর্মসূচি',
                'description' => 'আগামী ২০-২৬ জুলাই অনুষ্ঠিত হবে জাতীয় জৈব কৃষি সপ্তাহ। এই সপ্তাহে সারাদেশে জৈব কৃষি বিষয়ক প্রশিক্ষণ, মেলা এবং সেমিনার অনুষ্ঠিত হবে। কৃষকদের জৈব কৃষিতে উৎসাহিত করার জন্য বিশেষ পুরস্কারের ব্যবস্থা রয়েছে।',
                'priority' => 'medium',
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(1)
            ],
            [
                'category' => 'subsidy',
                'title' => 'সৌর পাম্পে ৫০% ভর্তুকি',
                'subtitle' => 'খুলনা ও বরিশাল বিভাগের কৃষকদের জন্য',
                'description' => 'কৃষি মন্ত্রণালয়ের নতুন ঘোষণা অনুযায়ী খুলনা ও বরিশাল বিভাগের কৃষকরা সৌর পাম্প ক্রয়ে ৫০% ভর্তুকি পাবেন। আবেদনের শেষ তারিখ ৩১ আগস্ট, ২০২৫। অনলাইনে আবেদন করুন কৃষি সম্প্রসারণ অধিদপ্তরের ওয়েবসাইটে।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now()->subHours(12)
            ],
            [
                'category' => 'alert',
                'title' => 'সাইক্লোন মোকাবেলা প্রস্তুতি',
                'subtitle' => 'উপকূলীয় এলাকার কৃষকদের সতর্কতা',
                'description' => 'আবহাওয়া অধিদপ্তরের পূর্বাভাস অনুযায়ী আগামী সপ্তাহে উপকূলীয় এলাকায় ঝড়ের সম্ভাবনা রয়েছে। কৃষকরা তাদের ফসল ও মাছের চাষের জন্য প্রয়োজনীয় সতর্কতা নিন। জরুরি যোগাযোগের জন্য স্থানীয় কৃষি কর্মকর্তার সাথে যোগাযোগ করুন।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now()->subHours(6)
            ],
            [
                'category' => 'training',
                'title' => 'আধুনিক ধান চাষ প্রশিক্ষণ',
                'subtitle' => 'রাজশাহী কৃষি বিশ্ববিদ্যালয়ে বিনামূল্যে কোর্স',
                'description' => 'রাজশাহী কৃষি বিশ্ববিদ্যালয়ে ২২ জুলাই থেকে শুরু হচ্ছে ৫ দিনের আধুনিক ধান চাষ প্রশিক্ষণ কোর্স। এই কোর্সে উন্নত জাতের ধান, সার প্রয়োগ, পোকামাকড় দমন এবং ফলন বৃদ্ধির কৌশল শেখানো হবে। নিবন্ধন করুন অনলাইনে।',
                'priority' => 'medium',
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(2)
            ],
            [
                'category' => 'general',
                'title' => 'কৃষি ঋণে নতুন সুবিধা',
                'subtitle' => 'ক্ষুদ্র ও প্রান্তিক কৃষকদের জন্য বিশেষ ঋণ প্যাকেজ',
                'description' => 'বাংলাদেশ ব্যাংকের নতুন নীতি অনুযায়ী ক্ষুদ্র ও প্রান্তিক কৃষকরা ৪% সুদে কৃষি ঋণ পাবেন। সর্বোচ্চ ৫০,০০০ টাকা পর্যন্ত ঋণ নেওয়া যাবে। কোনো জামানত লাগবে না। আবেদন করুন নিকটস্থ ব্যাংক শাখায়।',
                'priority' => 'medium',
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(3)
            ],
            [
                'category' => 'emergency',
                'title' => 'বন্যা পরবর্তী পুনর্বাসন সহায়তা',
                'subtitle' => 'ক্ষতিগ্রস্ত কৃষকদের জন্য জরুরি সহায়তা',
                'description' => 'সাম্প্রতিক বন্যায় ক্ষতিগ্রস্ত কৃষকদের জন্য সরকার জরুরি পুনর্বাসন কর্মসূচি ঘোষণা করেছে। ক্ষতিগ্রস্ত কৃষকরা বিনামূল্যে বীজ, সার এবং ৫০,০০০ টাকা পর্যন্ত অনুদান পাবেন। আবেদনের জন্য ইউনিয়ন পরিষদে যোগাযোগ করুন।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now()->subHours(2)
            ]
        ];

        foreach ($announcements as $announcement) {
            Announcement::create($announcement);
        }
    }
}Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeederNew extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

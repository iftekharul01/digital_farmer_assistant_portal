<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;
use Carbon\Carbon;

class NotificationSeederNew extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $notifications = [
            [
                'category' => 'আবহাওয়া',
                'title' => 'আগামী সপ্তাহে ভারী বৃষ্টির সম্ভাবনা',
                'subtitle' => 'কৃষকদের প্রয়োজনীয় সতর্কতা অবলম্বন করতে হবে',
                'description' => 'আবহাওয়া অধিদপ্তরের তথ্য অনুযায়ী আগামী সপ্তাহে দেশের উত্তরাঞ্চলে ভারী বৃষ্টিপাতের সম্ভাবনা রয়েছে। কৃষকদের ফসল রক্ষার জন্য প্রয়োজনীয় ব্যবস্থা নিতে হবে। ধান ক্ষেতে পানি নিষ্কাশনের ব্যবস্থা করুন এবং সবজি ক্ষেতে পলিথিন দিয়ে ঢেকে রাখুন।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subDays(1),
            ],
            [
                'category' => 'বাজার',
                'title' => 'ধানের দাম বৃদ্ধি পেয়েছে',
                'subtitle' => 'প্রতি মণ ১০০ টাকা বেশি দাম',
                'description' => 'এ সপ্তাহে ধানের দাম প্রতি মণে ১০০ টাকা বৃদ্ধি পেয়েছে। বর্তমানে আতপ ধানের দাম প্রতি মণ ১২০০-১৩০০ টাকা এবং বোরো ধানের দাম ১৩৫০-১৪৫০ টাকা। কৃষকরা এখনই বিক্রয়ের সুযোগ নিতে পারেন।',
                'priority' => 'medium',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subDays(2),
            ],
            [
                'category' => 'ভর্তুকি',
                'title' => 'নতুন সার ভর্তুকি কর্মসূচি চালু',
                'subtitle' => 'অনলাইনে আবেদন করুন',
                'description' => 'সরকার নতুন সার ভর্তুকি কর্মসূচি চালু করেছে। এই কর্মসূচিতে ইউরিয়া, টিএসপি এবং এমওপি সারে ৫০% পর্যন্ত ভর্তুকি পাওয়া যাবে। আবেদন করতে স্থানীয় কৃষি অফিসে যোগাযোগ করুন অথবা অনলাইনে আবেদন করুন। আবেদনের শেষ তারিখ: ৩০ আগস্ট ২০২৫।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subDays(3),
            ],
            [
                'category' => 'প্রযুক্তি',
                'title' => 'নতুন মোবাইল অ্যাপ চালু হয়েছে',
                'subtitle' => 'কৃষি তথ্য এখন হাতের মুঠোয়',
                'description' => 'কৃষি মন্ত্রণালয়ের নতুন মোবাইল অ্যাপ "কৃষি সহায়ক" চালু হয়েছে। এই অ্যাপের মাধ্যমে কৃষকরা বাজার দর, আবহাওয়া, কৃষি পরামর্শ এবং সরকারি সেবা সম্পর্কে তথ্য পাবেন। গুগল প্লে স্টোর এবং অ্যাপ স্টোর থেকে বিনামূল্যে ডাউনলোড করুন।',
                'priority' => 'medium',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subDays(4),
            ],
            [
                'category' => 'সাধারণ',
                'title' => 'কৃষি প্রশিক্ষণ কর্মসূচি',
                'subtitle' => 'বিনামূল্যে অংশগ্রহণ করুন',
                'description' => 'জেলা কৃষি সম্প্রসারণ অধিদপ্তরের উদ্যোগে আগামী মাসে বিনামূল্যে কৃষি প্রশিক্ষণ কর্মসূচি অনুষ্ঠিত হবে। এই প্রশিক্ষণে আধুনিক চাষাবাদ পদ্ধতি, জৈব সার তৈরি, কীটনাশক ব্যবহার এবং ফসল সংরক্ষণ বিষয়ে প্রশিক্ষণ দেওয়া হবে। নিবন্ধনের জন্য স্থানীয় কৃষি অফিসে যোগাযোগ করুন।',
                'priority' => 'low',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subDays(5),
            ],
            [
                'category' => 'জরুরি',
                'title' => 'ফসলে পোকার আক্রমণ সতর্কতা',
                'subtitle' => 'তাৎক্ষণিক ব্যবস্থা নিন',
                'description' => 'বর্তমানে দেশের বিভিন্ন অঞ্চলে ধান ও সবজি ফসলে মাজরা পোকা এবং বাদামি গাছ ফড়িংয়ের আক্রমণ দেখা দিয়েছে। কৃষকদের অতি দ্রুত ব্যবস্থা নিতে হবে। আক্রান্ত গাছ পরিষ্কার করুন এবং অনুমোদিত কীটনাশক ব্যবহার করুন। বিস্তারিত পরামর্শের জন্য কৃষি বিশেষজ্ঞদের সাথে যোগাযোগ করুন।',
                'priority' => 'high',
                'is_active' => true,
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now()->subHours(6),
            ],
        ];

        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}

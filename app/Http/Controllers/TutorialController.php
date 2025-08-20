<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    /**
     * Display tutorials page with both static and dynamic tutorials
     */
    public function index()
    {
        // Get active tutorials from database
        $dynamicTutorials = Tutorial::active()
                                  ->ordered()
                                  ->get();

        // Static tutorials (existing ones)
        $staticTutorials = [
            [
                'title' => 'মাটি পরীক্ষার কৌশল',
                'description' => 'ভাল ফসল উৎপাদনের জন্য মাটির গুণমান এবং পুষ্টি পরীক্ষা করার পদ্ধতি শিখুন।',
                'icon' => 'fas fa-vial',
                'url' => route('tutorials.soil-testing'),
                'sort_order' => 1
            ],
            [
                'title' => 'কৃষকদের জন্য আবহাওয়ার পূর্বাভাস',
                'description' => 'কৃষি কাজের পরিকল্পনার জন্য আবহাওয়ার ধরণ এবং পূর্বাভাস বুঝুন।',
                'icon' => 'fas fa-cloud-sun',
                'url' => route('tutorials.weather-forecasting'),
                'sort_order' => 2
            ],
            [
                'title' => 'সঠিক ফসল নির্বাচনের উপায়',
                'description' => 'মাটি, জলবায়ু এবং বাজারের চাহিদার ভিত্তিতে ফসল নির্বাচনের পরামর্শ।',
                'icon' => 'fas fa-seedling',
                'url' => route('tutorials.crop-selection'),
                'sort_order' => 3
            ],
            [
                'title' => 'সেচ ব্যবস্থাপনা ও পরিচালনা',
                'description' => 'স্বাস্থ্যকর ফসলের জন্য দক্ষ সেচ পদ্ধতি এবং পরিচালনা।',
                'icon' => 'fas fa-water',
                'url' => route('tutorials.irrigation-management'),
                'sort_order' => 4
            ],
            [
                'title' => 'পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণ',
                'description' => 'সাধারণ পোকামাকড় চিহ্নিত করুন এবং কার্যকর নিয়ন্ত্রণ কৌশল শিখুন।',
                'icon' => 'fas fa-bug',
                'url' => route('tutorials.pest-control'),
                'sort_order' => 5
            ],
            [
                'title' => 'জৈব বনাম রাসায়নিক সার',
                'description' => 'টেকসই কৃষির জন্য জৈব এবং রাসায়নিক সারের তুলনা।',
                'icon' => 'fas fa-leaf',
                'url' => route('tutorials.fertilizers'),
                'sort_order' => 6
            ],
            [
                'title' => 'ফসল সংরক্ষণের পরামর্শ',
                'description' => 'ফসল কাটার পর ক্ষতি কমানোর জন্য সংরক্ষণের সর্বোত্তম পদ্ধতি।',
                'icon' => 'fas fa-warehouse',
                'url' => route('tutorials.post-harvest-storage'),
                'sort_order' => 7
            ],
            [
                'title' => 'সরকারি কৃষি ভর্তুকির আবেদন',
                'description' => 'সরকারি সহায়তা এবং ভর্তুকির জন্য আবেদনের ধাপে ধাপে গাইড।',
                'icon' => 'fas fa-file-signature',
                'url' => route('tutorials.government-subsidies'),
                'sort_order' => 8
            ],
            [
                'title' => 'খামার রেকর্ড রাখার ডিজিটাল টুলস',
                'description' => 'সহজে খামারের রেকর্ড পরিচালনা ও ট্র্যাক করার জন্য ডিজিটাল টুলস আবিষ্কার করুন।',
                'icon' => 'fas fa-tablet-alt',
                'url' => route('tutorials.digital-tools'),
                'sort_order' => 9
            ],
            [
                'title' => 'কৃষি আইন ও অধিকার বোঝা',
                'description' => 'বাংলাদেশে কৃষি সংক্রান্ত আপনার অধিকার এবং গুরুত্বপূর্ণ আইন জানুন।',
                'icon' => 'fas fa-gavel',
                'url' => route('tutorials.farm-laws'),
                'sort_order' => 10
            ]
        ];

        // Convert static tutorials to objects for consistency
        $staticTutorials = collect($staticTutorials)->map(function ($tutorial) {
            return (object) $tutorial;
        });

        // Merge and sort all tutorials
        $allTutorials = $dynamicTutorials->concat($staticTutorials)
                                       ->sortBy('sort_order')
                                       ->values();

        return view('tutorials', compact('allTutorials', 'dynamicTutorials'));
    }

    /**
     * Display a dynamic tutorial
     */
    public function show($slug)
    {
        $tutorial = Tutorial::where('slug', $slug)
                          ->where('is_active', true)
                          ->firstOrFail();

        return view('tutorial_dynamic', compact('tutorial'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeContent;

class AdminWelcomeController extends Controller
{
    public function index()
    {
        $content = WelcomeContent::first();
        return view('admin.admin_welcome', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'hero_background_image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i'],
            'feature_1_title' => 'required|string|max:255',
            'feature_1_description' => 'required|string',
            'feature_2_title' => 'required|string|max:255',
            'feature_2_description' => 'required|string',
            'feature_3_title' => 'required|string|max:255',
            'feature_3_description' => 'required|string',
            'feature_4_title' => 'required|string|max:255',
            'feature_4_description' => 'required|string',
        ], [
            'hero_background_image.regex' => 'অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন (jpg, jpeg, png, gif, webp)'
        ]);

        $content = WelcomeContent::first();
        
        $data = $request->all();

        if ($content) {
            $content->update($data);
        } else {
            WelcomeContent::create($data);
        }

        return redirect()->back()->with('success', 'হোম পেজের বিষয়বস্তু সফলভাবে আপডেট হয়েছে!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroContent;

class AdminHomeController extends Controller
{
    public function index()
    {
        $heroContent = HeroContent::getActive() ?? new HeroContent([
            'hero_title' => 'Welcome to Farmer Portal',
            'hero_subtitle1' => 'Real-time Market Prices for Every Crop.',
            'hero_subtitle2' => 'Weather Alerts Tailored for Your Region.',
            'hero_background_image' => 'https://static.vecteezy.com/system/resources/thumbnails/031/111/833/original/landscape-of-green-crops-and-field-4k-clip-of-farming-and-agriculturist-with-seeding-of-rice-young-plant-and-field-rice-field-and-farmland-thailand-agriculture-and-farm-in-asia-video.jpg'
        ]);

        return view('admin.admin_home', compact('heroContent'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle1' => 'required|string|max:255', 
            'hero_subtitle2' => 'nullable|string|max:255',
            'hero_background_image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i']
        ], [
            'hero_background_image.regex' => 'অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন (jpg, jpeg, png, gif, webp)'
        ]);

        // Deactivate all existing hero contents
        HeroContent::where('is_active', true)->update(['is_active' => false]);

        // Create new active hero content
        HeroContent::create([
            'hero_title' => $request->hero_title,
            'hero_subtitle1' => $request->hero_subtitle1,
            'hero_subtitle2' => $request->hero_subtitle2,
            'hero_background_image' => $request->hero_background_image,
            'is_active' => true
        ]);

        return redirect()->back()->with('success', 'Hero content updated successfully!');
    }
}

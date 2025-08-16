<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeContent;
use Illuminate\Support\Facades\Storage;

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
            'hero_background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'feature_1_title' => 'required|string|max:255',
            'feature_1_description' => 'required|string',
            'feature_2_title' => 'required|string|max:255',
            'feature_2_description' => 'required|string',
            'feature_3_title' => 'required|string|max:255',
            'feature_3_description' => 'required|string',
            'feature_4_title' => 'required|string|max:255',
            'feature_4_description' => 'required|string',
        ]);

        $content = WelcomeContent::first();
        
        $data = $request->except(['hero_background_image']);

        // Handle hero background image upload
        if ($request->hasFile('hero_background_image')) {
            // Delete old image if exists
            if ($content && $content->hero_background_image) {
                Storage::disk('public')->delete('assets/hero_sections/' . $content->hero_background_image);
            }

            $image = $request->file('hero_background_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('assets/hero_sections', $imageName, 'public');
            $data['hero_background_image'] = $imageName;
        }

        if ($content) {
            $content->update($data);
        } else {
            WelcomeContent::create($data);
        }

        return redirect()->back()->with('success', 'হোম পেজের বিষয়বস্তু সফলভাবে আপডেট হয়েছে!');
    }
}

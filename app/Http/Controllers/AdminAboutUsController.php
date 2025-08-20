<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsContent;

class AdminAboutUsController extends Controller
{
    public function index()
    {
        $content = AboutUsContent::first();
        return view('admin.admin_about-us', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'hero_background_image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i'],
            'our_motivation' => 'required|string',
            'our_mission' => 'required|string',
            'our_vision' => 'required|string',
            'what_we_value' => 'required|string',
            'team_members' => 'nullable|array',
            'team_members.*.name' => 'required_with:team_members|string|max:255',
            'team_members.*.title' => 'required_with:team_members|string|max:255',
            'team_members.*.subtitle' => 'nullable|string|max:255',
            'team_members.*.image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i'],
            'team_members.*.linkedin' => 'nullable|url',
            'team_members.*.twitter' => 'nullable|url',
            'team_members.*.github' => 'nullable|url',
        ], [
            'hero_background_image.regex' => 'অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন (jpg, jpeg, png, gif, webp)',
            'team_members.*.image.regex' => 'টিম মেম্বারদের ইমেজের জন্য অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন',
            'hero_title.required' => 'হিরো শিরোনাম আবশ্যক',
            'hero_subtitle.required' => 'হিরো সাবটাইটেল আবশ্যক',
            'our_motivation.required' => 'আমাদের অনুপ্রেরণা আবশ্যক',
            'our_mission.required' => 'আমাদের মিশন আবশ্যক',
            'our_vision.required' => 'আমাদের ভিশন আবশ্যক',
            'what_we_value.required' => 'আমরা কী মূল্য দেই তা আবশ্যক',
        ]);

        // Get first record or create new one
        $content = AboutUsContent::first();
        if (!$content) {
            $content = new AboutUsContent();
        }

        // Filter out empty team members
        $teamMembers = [];
        if ($request->has('team_members')) {
            foreach ($request->team_members as $member) {
                if (!empty($member['name']) && !empty($member['title'])) {
                    $teamMembers[] = $member;
                }
            }
        }

        $content->hero_title = $request->hero_title;
        $content->hero_subtitle = $request->hero_subtitle;
        $content->hero_background_image = $request->hero_background_image;
        $content->our_motivation = $request->our_motivation;
        $content->our_mission = $request->our_mission;
        $content->our_vision = $request->our_vision;
        $content->what_we_value = $request->what_we_value;
        $content->team_members = $teamMembers;

        $content->save();

        return redirect()->route('admin.about-us')
                        ->with('success', 'About Us পেজের তথ্য সফলভাবে আপডেট হয়েছে।');
    }
}

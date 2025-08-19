<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ContactSettings;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function index()
    {
        $contactSettings = ContactSettings::first();
        
        // Default settings if none exist in database
        if (!$contactSettings) {
            $contactSettings = (object) [
                'page_title' => 'আমাদের সাথে যোগাযোগ করুন',
                'page_subtitle' => 'আপনার কোন প্রশ্ন বা মতামত থাকলে আমাদের সাথে যোগাযোগ করুন',
                'office_address' => 'ঢাকা, বাংলাদেশ',
                'primary_phone' => '+৮৮০ ১৭১১ ১২৩৪৫৬',
                'secondary_phone' => '+৮৮০ ১৯১১ ১২৩৪৫৬',
                'primary_email' => 'info@digitalfarmer.com',
                'support_email' => 'support@digitalfarmer.com',
                'working_hours' => 'রবিবার - বৃহস্পতিবার: সকাল ৯টা - বিকাল ৬টা',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'instagram_url' => '#',
                'linkedin_url' => '#',
                'youtube_url' => '#'
            ];
        }

        // Get logged-in user information for pre-filling form
        $userInfo = null;
        if (Session::get('logged_in')) {
            $userId = Session::get('user_id');
            $user = Registration::find($userId);
            
            if ($user) {
                $userInfo = (object) [
                    'name' => $user->full_name ?: $user->username,
                    'email' => $user->email
                ];
            }
        }

        return view('contact', compact('contactSettings', 'userInfo'));
    }

    /**
     * Handle contact form submission
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000'
        ], [
            'name.required' => 'নাম দেওয়া আবশ্যক',
            'email.required' => 'ইমেইল দেওয়া আবশ্যক',
            'email.email' => 'সঠিক ইমেইল ফরম্যাট দিন',
            'subject.required' => 'বিষয় দেওয়া আবশ্যক',
            'message.required' => 'বার্তা দেওয়া আবশ্যক'
        ]);

        // Add user_id if user is logged in using your session-based authentication
        if (Session::get('logged_in')) {
            $validated['user_id'] = Session::get('user_id');
        }

        ContactMessage::create($validated);

        return redirect()->route('contact')
            ->with('success', 'আপনার বার্তা সফলভাবে পাঠানো হয়েছে! আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।');
    }
}

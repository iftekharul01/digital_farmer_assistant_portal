<?php

namespace App\Http\Controllers;

use App\Models\ContactSettings;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContactController extends Controller
{
    /**
     * Display the admin contact management page
     */
    public function index()
    {
        $contactSettings = ContactSettings::first();
        $messages = ContactMessage::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        
        $messageStats = [
            'new' => ContactMessage::new()->count(),
            'in_progress' => ContactMessage::inProgress()->count(),
            'replied' => ContactMessage::replied()->count(),
            'total' => ContactMessage::count()
        ];

        return view('admin.admin_contact', compact('contactSettings', 'messages', 'messageStats'));
    }

    /**
     * Update contact settings
     */
    public function updateSettings(Request $request)
    {
        $validated = $request->validate([
            'page_title' => 'required|string|max:255',
            'page_subtitle' => 'required|string|max:500',
            'office_address' => 'required|string|max:1000',
            'primary_phone' => 'required|string|max:20',
            'secondary_phone' => 'nullable|string|max:20',
            'primary_email' => 'required|email|max:255',
            'support_email' => 'nullable|email|max:255',
            'working_hours' => 'required|string|max:500',
            'facebook_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255'
        ]);

        $contactSettings = ContactSettings::first();
        
        if ($contactSettings) {
            $contactSettings->update($validated);
        } else {
            ContactSettings::create($validated);
        }

        return redirect()->route('admin.contact')
            ->with('success', 'যোগাযোগের তথ্য সফলভাবে আপডেট হয়েছে!');
    }

    /**
     * View a specific message
     */
    public function viewMessage($id)
    {
        $message = ContactMessage::with('user')->findOrFail($id);
        
        // Only mark the viewed timestamp without changing status
        if (!$message->viewed_at) {
            $message->update(['viewed_at' => now()]);
        }

        return view('admin.contact_message_details', compact('message'));
    }

    /**
     * Update message status
     */
    public function updateMessageStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,in_progress,replied',
            'admin_reply' => 'nullable|string|max:2000'
        ]);

        $message = ContactMessage::findOrFail($id);
        
        // Debug: Log what we're doing
        \Log::info('Updating message status', [
            'message_id' => $id,
            'old_status' => $message->status,
            'new_status' => $validated['status'],
            'has_reply' => !empty($validated['admin_reply'])
        ]);
        
        // If status is set to 'replied', require admin_reply
        if ($validated['status'] === 'replied') {
            if (empty($validated['admin_reply'])) {
                return redirect()->back()
                    ->withErrors(['admin_reply' => 'উত্তর দেওয়া হয়েছে স্ট্যাটাসের জন্য প্রশাসকের উত্তর আবশ্যক।'])
                    ->withInput();
            }
            $message->markAsReplied($validated['admin_reply']);
        } else {
            // Just update the status and admin_reply if provided
            $updateData = ['status' => $validated['status']];
            if (!empty($validated['admin_reply'])) {
                $updateData['admin_reply'] = $validated['admin_reply'];
            }
            $message->update($updateData);
        }

        // Verify the message still exists
        $messageStillExists = ContactMessage::find($id);
        \Log::info('Message after update', [
            'exists' => $messageStillExists ? 'yes' : 'no',
            'status' => $messageStillExists ? $messageStillExists->status : 'N/A'
        ]);

        return redirect()->route('admin.contact')
            ->with('success', 'বার্তার স্ট্যাটাস সফলভাবে আপডেট হয়েছে!');
    }

    /**
     * Delete a message
     */
    public function deleteMessage($id)
    {
        \Log::info('DELETE method called for message ID: ' . $id);
        
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.contact')
            ->with('success', 'বার্তা মুছে ফেলা হয়েছে!');
    }

    /**
     * Get contact settings for frontend
     */
    public function getContactSettings()
    {
        $settings = ContactSettings::first();
        
        if (!$settings) {
            // Return default settings if none exist
            return [
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

        return $settings->toArray();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;

class AdminNotificationController extends Controller
{
    public function index()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'আগে অ্যাডমিন লগইন করুন।');
        }

        $notifications = Notification::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.admin_notifications', compact('notifications'));
    }

    public function store(Request $request)
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'আগে অ্যাডমিন লগইন করুন।');
        }

        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'is_active' => 'boolean'
        ]);

        Notification::create([
            'category' => $request->category,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'priority' => $request->priority,
            'is_active' => $request->has('is_active'),
            'published_at' => now()
        ]);

        return redirect()->back()->with('success', 'নোটিফিকেশন সফলভাবে তৈরি হয়েছে।');
    }

    public function update(Request $request, $id)
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'আগে অ্যাডমিন লগইন করুন।');
        }

        $notification = Notification::findOrFail($id);

        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'is_active' => 'boolean'
        ]);

        $notification->update([
            'category' => $request->category,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'priority' => $request->priority,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->back()->with('success', 'নোটিফিকেশন সফলভাবে আপডেট হয়েছে।');
    }

    public function destroy($id)
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'আগে অ্যাডমিন লগইন করুন।');
        }

        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->back()->with('success', 'নোটিফিকেশন সফলভাবে ডিলিট হয়েছে।');
    }
}

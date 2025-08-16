<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AdminAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('admin.admin_announcements', compact('announcements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'is_active' => 'boolean'
        ]);

        Announcement::create([
            'category' => $request->category,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'priority' => $request->priority,
            'is_active' => $request->boolean('is_active'),
            'published_at' => now()
        ]);

        return redirect()->back()->with('success', 'Announcement created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'is_active' => 'boolean'
        ]);

        $announcement = Announcement::findOrFail($id);
        $announcement->update([
            'category' => $request->category,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'priority' => $request->priority,
            'is_active' => $request->boolean('is_active')
        ]);

        return redirect()->back()->with('success', 'Announcement updated successfully!');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->back()->with('success', 'Announcement deleted successfully!');
    }
}

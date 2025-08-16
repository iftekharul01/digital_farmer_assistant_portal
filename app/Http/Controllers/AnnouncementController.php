<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        $query = Announcement::active();

        // Apply filters
        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }

        if ($request->filled('priority')) {
            $query->byPriority($request->priority);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('subtitle', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $announcements = $query->orderBy('priority', 'desc')
                              ->orderBy('created_at', 'desc')
                              ->paginate(12);

        $categories = Announcement::active()->distinct()->pluck('category');
        $priorities = ['low', 'medium', 'high'];

        return view('announcements', compact('announcements', 'categories', 'priorities'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $query = Notification::active()->orderBy('created_at', 'desc');

        // Filter by category
        if ($request->has('category') && $request->category != '') {
            $query->byCategory($request->category);
        }

        // Filter by priority
        if ($request->has('priority') && $request->priority != '') {
            $query->byPriority($request->priority);
        }

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('subtitle', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $notifications = $query->paginate(12);
        $categories = Notification::active()->distinct()->pluck('category');

        return view('notifications', compact('notifications', 'categories'));
    }
}

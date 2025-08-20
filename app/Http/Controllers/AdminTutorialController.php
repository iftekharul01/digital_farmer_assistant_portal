<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminTutorialController extends Controller
{
    /**
     * Display a listing of the tutorials.
     */
    public function index()
    {
        $tutorials = Tutorial::orderBy('sort_order', 'asc')
                           ->orderBy('created_at', 'desc')
                           ->paginate(10);
        
        return view('admin.admin_tutorials', compact('tutorials'));
    }

    /**
     * Show the form for creating a new tutorial.
     */
    public function create()
    {
        return view('admin.tutorial_create');
    }

    /**
     * Store a newly created tutorial in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'required|string',
            'icon' => 'required|string|max:100',
            'video_url' => 'nullable|url',
            'video_title' => 'nullable|string|max:255',
            'video_description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        // Generate unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        
        while (Tutorial::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        Tutorial::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'content' => $request->input('content'),
            'icon' => $request->icon,
            'video_url' => $request->video_url,
            'video_title' => $request->video_title,
            'video_description' => $request->video_description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.tutorials')
                        ->with('success', 'টিউটোরিয়াল সফলভাবে যোগ করা হয়েছে!');
    }

    /**
     * Show the form for editing the specified tutorial.
     */
    public function edit($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        return view('admin.tutorial_edit', compact('tutorial'));
    }

    /**
     * Update the specified tutorial in storage.
     */
    public function update(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'content' => 'required|string',
            'icon' => 'required|string|max:100',
            'video_url' => 'nullable|url',
            'video_title' => 'nullable|string|max:255',
            'video_description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                           ->withErrors($validator)
                           ->withInput();
        }

        // Generate unique slug if title changed
        $slug = $tutorial->slug;
        if ($tutorial->title !== $request->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $counter = 1;
            
            while (Tutorial::where('slug', $slug)->where('id', '!=', $tutorial->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
        }

        $tutorial->update([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'content' => $request->input('content'),
            'icon' => $request->icon,
            'video_url' => $request->video_url,
            'video_title' => $request->video_title,
            'video_description' => $request->video_description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.tutorials')
                        ->with('success', 'টিউটোরিয়াল সফলভাবে আপডেট করা হয়েছে!');
    }

    /**
     * Remove the specified tutorial from storage.
     */
    public function destroy($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->delete();

        return redirect()->route('admin.tutorials')
                        ->with('success', 'টিউটোরিয়াল সফলভাবে মুছে ফেলা হয়েছে!');
    }

    /**
     * Toggle tutorial status
     */
    public function toggleStatus($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->is_active = !$tutorial->is_active;
        $tutorial->save();

        $status = $tutorial->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়';
        return redirect()->route('admin.tutorials')
                        ->with('success', "টিউটোরিয়াল {$status} করা হয়েছে!");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SavedNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\JsonResponse;

class SavedNewsController extends Controller
{
    /**
     * Display saved news for authenticated user
     */
    public function index()
    {
        if (!Session::get('logged_in')) {
            return redirect()->route('login')->with('error', 'সংরক্ষিত সংবাদ দেখার জন্য অনুগ্রহ করে লগইন করুন।');
        }

        $userId = Session::get('user_id');
        $savedNews = SavedNews::where('user_id', $userId)
                             ->orderBy('created_at', 'desc')
                             ->paginate(12);

        return view('saved-news', compact('savedNews'));
    }

    /**
     * Save a news article for the authenticated user
     */
    public function store(Request $request): JsonResponse
    {
        if (!Session::get('logged_in')) {
            return response()->json([
                'success' => false,
                'message' => 'সংবাদ সংরক্ষণের জন্য অনুগ্রহ করে লগইন করুন!'
            ], 401);
        }

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'link' => 'required|url',
                'description' => 'nullable|string',
                'image_url' => 'nullable|url',
                'source_id' => 'nullable|string',
                'pub_date' => 'nullable|string',
                'category' => 'nullable|string',
                'country' => 'nullable|string',
                'language' => 'nullable|string'
            ]);

            $userId = Session::get('user_id');

            // Check if news is already saved by this user
            $existingSave = SavedNews::where('user_id', $userId)
                                   ->where('link', $request->link)
                                   ->first();

            if ($existingSave) {
                return response()->json([
                    'success' => false,
                    'message' => 'এই সংবাদটি ইতিমধ্যে সংরক্ষিত আছে!'
                ], 409);
            }

            SavedNews::create([
                'user_id' => $userId,
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'image_url' => $request->image_url,
                'source_id' => $request->source_id,
                'pub_date' => $request->pub_date,
                'category' => $request->category,
                'country' => $request->country,
                'language' => $request->language
            ]);

            return response()->json([
                'success' => true,
                'message' => 'সংবাদটি সফলভাবে সংরক্ষিত হয়েছে!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'সংবাদ সংরক্ষণে ত্রুটি হয়েছে!'
            ], 500);
        }
    }

    /**
     * Remove saved news
     */
    public function destroy($id): JsonResponse
    {
        if (!Session::get('logged_in')) {
            return response()->json([
                'success' => false,
                'message' => 'সংবাদ মুছার জন্য অনুগ্রহ করে লগইন করুন!'
            ], 401);
        }

        try {
            $userId = Session::get('user_id');
            $savedNews = SavedNews::where('id', $id)
                                 ->where('user_id', $userId)
                                 ->first();

            if (!$savedNews) {
                return response()->json([
                    'success' => false,
                    'message' => 'সংবাদটি পাওয়া যায়নি!'
                ], 404);
            }

            $savedNews->delete();

            return response()->json([
                'success' => true,
                'message' => 'সংবাদটি সফলভাবে মুছে ফেলা হয়েছে!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'সংবাদ মুছতে ত্রুটি হয়েছে!'
            ], 500);
        }
    }

    /**
     * Check if a news article is saved by user
     */
    public function checkSaved(Request $request): JsonResponse
    {
        if (!Session::get('logged_in')) {
            return response()->json(['is_saved' => false]);
        }

        $request->validate(['link' => 'required|url']);
        
        $userId = Session::get('user_id');
        $isSaved = SavedNews::where('user_id', $userId)
                           ->where('link', $request->link)
                           ->exists();

        return response()->json(['is_saved' => $isSaved]);
    }
}

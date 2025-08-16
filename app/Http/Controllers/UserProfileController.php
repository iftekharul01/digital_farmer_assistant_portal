<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Registration;
use App\Models\UserInfo;

class UserProfileController extends Controller
{
    public function profile()
    {
        // Check if user is logged in
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'আগে লগইন করুন।');
        }

        $userId = Session::get('user_id');
        $user = Registration::find($userId);
        $userInfo = UserInfo::where('user_id', $userId)->first();

        return view('userprofile', compact('user', 'userInfo'));
    }

    public function updateProfile(Request $request)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'আগে লগইন করুন।');
        }

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
            'district' => 'nullable|string|max:100',
            'upazila' => 'nullable|string|max:100',
            'profession' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|in:পুরুষ,মহিলা,অন্যান্য',
            'farm_size' => 'nullable|string|max:50',
            'main_crops' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $userId = Session::get('user_id');
        
        // Update or create user info
        $userInfo = UserInfo::updateOrCreate(
            ['user_id' => $userId],
            [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'district' => $request->district,
                'upazila' => $request->upazila,
                'profession' => $request->profession,
                'bio' => $request->bio,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'farm_size' => $request->farm_size,
                'main_crops' => $request->main_crops
            ]
        );

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($userInfo->profile_image && Storage::disk('public')->exists($userInfo->profile_image)) {
                Storage::disk('public')->delete($userInfo->profile_image);
            }

            $image = $request->file('profile_image');
            $imageName = 'profile_' . $userId . '_' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('assets/profile_images', $imageName, 'public');
            
            $userInfo->profile_image = $imagePath;
            $userInfo->save();
        }

        return redirect('/user-profile')->with('success', 'প্রোফাইল সফলভাবে আপডেট হয়েছে।');
    }

    public function settings()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'আগে লগইন করুন।');
        }

        $userId = Session::get('user_id');
        $user = Registration::find($userId);

        return view('usersettings', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'আগে লগইন করুন।');
        }

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed'
        ]);

        $userId = Session::get('user_id');
        $user = Registration::find($userId);

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'বর্তমান পাসওয়ার্ড সঠিক নয়।');
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/user-settings')->with('success', 'পাসওয়ার্ড সফলভাবে পরিবর্তন হয়েছে।');
    }

    public function favourites()
    {
        if (!Session::has('user_id')) {
            return redirect('/login')->with('error', 'আগে লগইন করুন।');
        }

        $userId = Session::get('user_id');
        $user = Registration::find($userId);

        // For now, we'll return an empty favourites array
        // This can be extended to include actual favourite items
        $favourites = [];

        return view('userfavourites', compact('user', 'favourites'));
    }
}

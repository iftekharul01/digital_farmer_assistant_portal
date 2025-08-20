<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRegistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Show admin login form
     */
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    /**
     * Show admin registration form
     */
    public function showRegistrationForm()
    {
        return view('admin.admin_register');
    }

    /**
     * Handle admin registration
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:admin_registrations',
            'email' => 'required|string|email|max:255|unique:admin_registrations',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        AdminRegistration::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Admin registration successful! Please login.');
    }

    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $admin = AdminRegistration::where($loginField, $request->login)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id);
            Session::put('admin_username', $admin->username);
            Session::put('admin_email', $admin->email);
            Session::put('admin_logged_in', true);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Invalid username/email or password.'])->withInput();
    }

    /**
     * Show admin dashboard
     */
    public function dashboard()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin panel.');
        }
        return view('admin.admin_dashboard');
    }

    /**
     * Handle admin logout
     */
    public function logout()
    {
        Session::flush();
        
        // Create response with cache prevention headers
        $response = redirect()->route('admin.login')->with('success', 'অ্যাডমিন সফলভাবে লগআউট হয়েছেন।');
        
        // Prevent browser caching
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        
        return $response;
    }

    /**
     * Admin page controllers
     */
    public function adminHome()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_home');
    }

    public function adminAboutUs()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_about-us');
    }

    public function adminContact()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_contact');
    }

    public function adminCropDoctor()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_crop-doctor');
    }

    public function adminMarketPrices()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_market-prices');
    }

    public function adminTutorials()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_tutorials');
    }

    public function adminSubsidiesNews()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_subsidies-news');
    }

    public function adminWeather()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_weather');
    }

    public function adminWelcome()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return view('admin.admin_welcome');
    }
}

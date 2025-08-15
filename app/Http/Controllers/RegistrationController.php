<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class RegistrationController extends Controller
{
    /**
     * Show the registration form
     */
    public function showRegistrationForm()
    {
        return view('signup');
    }

    /**
     * Handle registration form submission
     */
    public function register(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:registrations',
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registrations',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create new registration
        $registration = Registration::create([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle login form submission
     */
    public function login(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Check if login is email or username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        // Find user by email or username
        $user = Registration::where($loginField, $request->login)->first();

        // Check if user exists and password matches
        if ($user && Hash::check($request->password, $user->password)) {
            // Create session
            Session::put('user_id', $user->id);
            Session::put('username', $user->username);
            Session::put('full_name', $user->full_name);
            Session::put('email', $user->email);
            Session::put('logged_in', true);

            // Redirect to home page
            return redirect()->route('home')->with('success', 'Login successful! Welcome back.');
        }

        // Login failed
        return back()->withErrors(['login' => 'Invalid username/email or password.'])->withInput();
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        // Clear all session data
        Session::flush();
        
        // Redirect to welcome page
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google OAuth
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            // Get user data from Google
            $googleUser = Socialite::driver('google')->user();
            
            // Check if user already exists in our database
            $existingUser = Registration::where('email', $googleUser->email)->first();
            
            if ($existingUser) {
                // User exists, log them in
                Session::put('user_id', $existingUser->id);
                Session::put('username', $existingUser->username);
                Session::put('full_name', $existingUser->full_name ?? '');
                Session::put('email', $existingUser->email);
                Session::put('logged_in', true);
                
                return redirect()->route('home');
            } else {
                // Create new user with only username and email
                // Generate a username from email (before the @ symbol)
                $username = explode('@', $googleUser->email)[0];
                $originalUsername = $username;
                $counter = 1;
                
                // Make sure username is unique
                while (Registration::where('username', $username)->exists()) {
                    $username = $originalUsername . $counter;
                    $counter++;
                }
                
                // Create new user with only username and email (no full_name, no password)
                $newUser = Registration::create([
                    'username' => $username,
                    'email' => $googleUser->email,
                    'full_name' => null, // Store as null for Google users
                    'password' => null, // Store as null for Google users
                ]);
                
                // Log in the new user
                Session::put('user_id', $newUser->id);
                Session::put('username', $newUser->username);
                Session::put('full_name', ''); // Empty string for display
                Session::put('email', $newUser->email);
                Session::put('logged_in', true);
                
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            return redirect()->route('login')
                ->withErrors(['google' => 'Google authentication failed: ' . $e->getMessage()]);
        }
    }
}

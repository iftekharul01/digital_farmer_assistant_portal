<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MarketPriceController;
use App\Http\Controllers\AdminPriceController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminWelcomeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdminNotificationController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminAboutUsController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/admin/welcome', [AdminWelcomeController::class, 'index']);
Route::put('/admin/welcome', [AdminWelcomeController::class, 'update']);

// Login routes
Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login'])->name('login.post');

// Logout route
Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/signup', [RegistrationController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'register'])->name('signup.post');

// Route for home page (protected)
Route::get('/home', function () {
    if (!Session::get('logged_in')) {
        return redirect()->route('login')->with('error', 'Please login to access the home page.');
    }
    
    // Get dynamic hero content
    $heroContent = \App\Models\HeroContent::getActive() ?? (object)[
        'hero_title' => 'কৃষক পোর্টালে স্বাগতম',
        'hero_subtitle1' => 'প্রতিটি ফসলের রিয়েল-টাইম মার্কেট প্রাইস।',
        'hero_subtitle2' => 'আপনার অঞ্চলের জন্য আবহাওয়া সতর্কতা।',
        'hero_background_image' => 'https://static.vecteezy.com/system/resources/thumbnails/031/111/833/original/landscape-of-green-crops-and-field-4k-clip-of-farming-and-agriculturist-with-seeding-of-rice-young-plant-and-field-rice-field-and-farmland-thailand-agriculture-and-farm-in-asia-video.jpg'
    ];
    
    // Get top 5 latest notifications
    $notifications = \App\Models\Notification::where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
    
    // Get top 5 latest announcements
    $announcements = \App\Models\Announcement::where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
    
    return view('home', compact('heroContent', 'notifications', 'announcements'));
})->name('home');

// User Profile Routes (protected)
Route::get('/user-profile', [UserProfileController::class, 'profile'])->name('user.profile');
Route::post('/user-profile/update', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');
Route::get('/user-settings', [UserProfileController::class, 'settings'])->name('user.settings');
Route::post('/user-settings/update-password', [UserProfileController::class, 'updatePassword'])->name('user.settings.update-password');
Route::get('/user-favourites', [UserProfileController::class, 'favourites'])->name('user.favourites');

// Notification Routes
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');

// Announcement Routes
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements');

// Route for market-prices page
Route::get('/market-prices', [MarketPriceController::class, 'index'])->name('market-prices');

// Route for weather page
Route::get('/weather', function () {
    return view('weather'); 
})->name('weather');

// Route for crop-doctor page
Route::get('/crop-doctor', function () {
    return view('crop-doctor'); 
})->name('crop-doctor');

// Route for subsidies-news page
Route::get('/subsidies-news', function () {
    return view('subsidies-news'); 
})->name('subsidies-news');

// Route for  tutorials page
Route::get('/tutorials', function () {
    return view('tutorials'); 
})->name('tutorials');

// Individual Tutorial Pages
Route::get('/tutorials/soil-testing', function () {
    return view('tutorials.soil-testing');
})->name('tutorials.soil-testing');

Route::get('/tutorials/weather-forecasting', function () {
    return view('tutorials.weather-forecasting');
})->name('tutorials.weather-forecasting');

Route::get('/tutorials/crop-selection', function () {
    return view('tutorials.crop-selection');
})->name('tutorials.crop-selection');

Route::get('/tutorials/irrigation-management', function () {
    return view('tutorials.irrigation-management');
})->name('tutorials.irrigation-management');

Route::get('/tutorials/pest-control', function () {
    return view('tutorials.pest-control');
})->name('tutorials.pest-control');

Route::get('/tutorials/fertilizers', function () {
    return view('tutorials.fertilizers');
})->name('tutorials.fertilizers');

Route::get('/tutorials/post-harvest-storage', function () {
    return view('tutorials.post-harvest-storage');
})->name('tutorials.post-harvest-storage');

Route::get('/tutorials/government-subsidies', function () {
    return view('tutorials.government-subsidies');
})->name('tutorials.government-subsidies');

Route::get('/tutorials/digital-tools', function () {
    return view('tutorials.digital-tools');
})->name('tutorials.digital-tools');

Route::get('/tutorials/farm-laws', function () {
    return view('tutorials.farm-laws');
})->name('tutorials.farm-laws');

// Route for about-us page
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

// Route for contact page (requires login)
Route::get('/contact', function() {
    if (!Session::get('logged_in')) {
        return redirect()->route('login')->with('error', 'যোগাযোগ পেজ দেখার জন্য অনুগ্রহ করে লগইন করুন।');
    }
    return app(ContactController::class)->index();
})->name('contact');

Route::post('/contact', function(Illuminate\Http\Request $request) {
    if (!Session::get('logged_in')) {
        return redirect()->route('login')->with('error', 'বার্তা পাঠানোর জন্য অনুগ্রহ করে লগইন করুন।');
    }
    return app(ContactController::class)->store($request);
})->name('contact.store');

// Route for user's contact messages and replies
Route::get('/my-messages', [ContactController::class, 'myMessages'])->name('user.messages');
Route::get('/my-messages/{id}', [ContactController::class, 'viewMyMessage'])->name('user.message.view');

// Google OAuth Routes
Route::get('/login/google', [RegistrationController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [RegistrationController::class, 'handleGoogleCallback']);

// Admin Routes
Route::prefix('admin')->group(function () {
    // Admin Login and Registration
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Protected Admin Routes (require admin authentication)
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.admin_dashboard');
        })->name('admin.dashboard');
        
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
        Route::put('/home', [AdminHomeController::class, 'update'])->name('admin.home.update');
        
        Route::get('/market-prices', [AdminPriceController::class, 'index'])->name('admin.market-prices');
        Route::post('/market-prices', [AdminPriceController::class, 'store'])->name('admin.market-prices.store');
        Route::get('/market-prices/{id}/edit', [AdminPriceController::class, 'edit'])->name('admin.market-prices.edit');
        Route::put('/market-prices/{id}', [AdminPriceController::class, 'update'])->name('admin.market-prices.update');
        Route::delete('/market-prices/{id}', [AdminPriceController::class, 'destroy'])->name('admin.market-prices.destroy');
        Route::post('/market-prices/bulk-update', [AdminPriceController::class, 'bulkUpdate'])->name('admin.market-prices.bulk-update');
        
        Route::get('/about-us', [App\Http\Controllers\AdminAboutUsController::class, 'index'])->name('admin.about-us');
        Route::put('/about-us', [App\Http\Controllers\AdminAboutUsController::class, 'update'])->name('admin.about-us.update');
        
        Route::get('/contact', [AdminContactController::class, 'index'])->name('admin.contact');
        Route::post('/contact/settings', [AdminContactController::class, 'updateSettings'])->name('admin.contact.settings');
        Route::get('/contact/message/{id}', [AdminContactController::class, 'viewMessage'])->name('admin.contact.message');
        Route::put('/contact/message/{id}', [AdminContactController::class, 'updateMessageStatus'])->name('admin.contact.message.update');
        Route::delete('/contact/message/{id}', [AdminContactController::class, 'deleteMessage'])->name('admin.contact.message.delete');
        
        Route::get('/crop-doctor', function () {
            return view('admin.admin_crop-doctor');
        })->name('admin.crop-doctor');
        
        Route::get('/tutorials', function () {
            return view('admin.admin_tutorials');
        })->name('admin.tutorials');
        
        Route::get('/subsidies-news', function () {
            return view('admin.admin_subsidies-news');
        })->name('admin.subsidies-news');
        
        Route::get('/weather', function () {
            return view('admin.admin_weather');
        })->name('admin.weather');
        
        Route::get('/welcome', [AdminWelcomeController::class, 'index'])->name('admin.welcome');
        Route::put('/welcome', [AdminWelcomeController::class, 'update'])->name('admin.welcome.update');
        
        Route::get('/notifications', [AdminNotificationController::class, 'index'])->name('admin.notifications');
        Route::post('/notifications', [AdminNotificationController::class, 'store'])->name('admin.notifications.store');
        Route::put('/notifications/{id}', [AdminNotificationController::class, 'update'])->name('admin.notifications.update');
        Route::delete('/notifications/{id}', [AdminNotificationController::class, 'destroy'])->name('admin.notifications.destroy');
        
        Route::get('/announcements', [AdminAnnouncementController::class, 'index'])->name('admin.announcements');
        Route::post('/announcements', [AdminAnnouncementController::class, 'store'])->name('admin.announcements.store');
        Route::put('/announcements/{id}', [AdminAnnouncementController::class, 'update'])->name('admin.announcements.update');
        Route::delete('/announcements/{id}', [AdminAnnouncementController::class, 'destroy'])->name('admin.announcements.destroy');
    });
});




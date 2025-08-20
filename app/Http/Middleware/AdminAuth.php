<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'এই পেজ দেখার জন্য অনুগ্রহ করে অ্যাডমিন হিসেবে লগইন করুন।');
        }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeContent;

class WelcomeController extends Controller
{
    public function index()
    {
        $content = WelcomeContent::first();
        return view('welcome', compact('content'));
    }
}

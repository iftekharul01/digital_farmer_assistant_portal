<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsContent;

class AboutUsController extends Controller
{
    public function index()
    {
        $content = AboutUsContent::getContent();
        return view('about-us', compact('content'));
    }
}

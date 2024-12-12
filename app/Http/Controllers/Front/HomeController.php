<?php

namespace App\Http\Controllers\Front;

use App\Models\HomePageContent;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contents = HomePageContent::all(); // Fetch all sections for the homepage
        $recentPosts = BlogPost::latest()->take(3)->get(); // Fetch 3 most recent blog posts
        return view('front.home', compact('contents', 'recentPosts'));
    }
}


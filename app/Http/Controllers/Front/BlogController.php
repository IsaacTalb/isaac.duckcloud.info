<?php

namespace App\Http\Controllers\Front;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(5);
        return view('front.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('front.blog.show', compact('post'));
    }
}

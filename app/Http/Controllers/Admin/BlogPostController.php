<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('admin.blog-posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog-posts.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'video_url' => 'nullable|url',
        'slug' => 'nullable|unique:blog_posts,slug',
    ]);

    $data = $request->only(['title', 'content', 'author', 'video_url']); 


    // Generate slug if not provided
    $data['slug'] = $request->slug 
        ? Str::slug($request->slug, '-') 
        : Str::slug($request->title, '-');

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('uploads', 'public');
    }

    BlogPost::create($data); // Save data to the database

    return redirect()->route('admin.blog')
        ->with('success', 'Blog post created successfully.');
    }



    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blog-posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|url',
            'slug' => 'nullable|unique:blog_posts,slug,' . $id,
        ]);

        $data = $request->all();

        // Auto-generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($request->title, '-');
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }


        $data['video_url'] = $request->input('video_url');

        $post->update($data);

        return redirect()->route('admin.blog')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        BlogPost::destroy($id);

        return redirect()->route('admin.blog')
            ->with('success', 'Post deleted successfully.');
    }
}

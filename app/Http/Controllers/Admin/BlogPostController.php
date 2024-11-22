<?php

namespace App\Http\Controllers\Admin;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
            'content' => 'required',
            'slug' => 'required|unique:blog_posts,slug',
        ]);

        Post::create($request->all());

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog Post created successfully.');
    }

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.blog-posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|unique:blog_posts,slug,' . $id,
        ]);

        $post->update($request->all());

        return redirect()->route('admin.blog-posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        BlogPost::destroy($id);
        return redirect()->route('admin.blog-posts.index')->with('success', 'Post deleted successfully.');
    }
}

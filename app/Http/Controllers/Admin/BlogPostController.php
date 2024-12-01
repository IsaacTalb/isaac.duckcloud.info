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
        'images' => 'nullable|array',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'video_url' => 'nullable|url',
        'slug' => 'nullable|unique:blog_posts,slug',
    ],[
        'title.required' => 'The title is required.',
        'content.required' => 'The content is required.',
        'author.required'=> 'Author Name is required',
        'images.array' => 'The images must be an array.',
        'images.*.image' => 'Each file must be an image.',
        'video_url.url' => 'The video URL must be a valid URL.',
        'slug.required'=>'The Slug name is required',
    ]);

    $data = $request->only(['title', 'content', 'author', 'video_url']); 


    // Generate slug if not provided
    $data['slug'] = $request->slug 
        ? Str::slug($request->slug, '-') 
        : Str::slug($request->title, '-');

    // Handle image upload if provided
    if ($request->hasFile('images')) {
        $images = [];
        foreach ($request->file('images') as $image) {
            $path = $image->store('images', 'public');
            $images[] = $path;
        }
        $data['images'] = json_encode($images);
    }

    BlogPost::create($data); // Save data to the database

    return redirect()->route('admin.blog')
        ->with('success', 'Blog post created successfully.');
    }



    public function edit($id)
    {
        $posts = BlogPost::findOrFail($id);
        return view('admin.blog-posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $posts = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'video_url' => 'nullable|url',
            'slug' => 'nullable|unique:blog_posts,slug,' . $id,
        ]);

        $data = $request->only(['title', 'content', 'author', 'video_url', 'slug']); 


        // Auto-generate slug if not provided
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($request->title, '-');
        }

        if (request->hasFile('images')) {
            if ($posts->images) {
                foreach (json_decode($posts->images, true) as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('uploads', 'public');
            }
            $data['images'] = json_encode($images);
        }


        $data['video_url'] = $request->input('video_url');

        $posts->update($data);

        return redirect()->route('admin.blog')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $posts= BlogPost::findOrFail($id);

        if ($posts->images){
            foreach (json_decode($posts->images, true) as $image) {
                Storage::disk('public')->delete($image);
            }

        }
        $posts->delete();

        return redirect()->route('admin.blog')
            ->with('success', 'Post deleted successfully.');
    }

    public function deleteImage(Request $request, $id)
    {
        $posts = BlogPost::FindOrFail($id);

        $image = $request->input('image');

        $images = json_decode($posts->images, true);

        if (($key =array_search($image, $images)) !==false) {
            unset($images[$key]);
            Storage::disk('public')->delete($image);
            $posts->images = json_encode(array_values($images));
            $posts->save();
        }

        return redirect()->route('admin.blog.edit', $id)->with('success' , 'Image deleted successfully!');
    }
}

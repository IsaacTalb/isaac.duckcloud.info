<?php

namespace App\Http\Controllers\Admin;
use App\Models\HomePageContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $contents = HomePageContent::all();
        return view('admin.home-page.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.home-page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string|max:255',
            'section_content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url' => 'nullable|url',
        ]);

        $data = $request->all();
        if ($request->hasFile('image', 'video_url')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
            $data['video_url'] = $request->input('video_url');
        }

        HomePageContent::create($data);

        return redirect()->route('admin.home')->with('success', 'Page created successfully.');
    }

    public function edit($id)
    {
        $content = HomePageContent::findOrFail($id);
        return view('admin.home-page.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = HomePageContent::findOrFail($id);

        $request->validate([
            'section_title' => 'required|string|max:255',
            'section_content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video_url' => 'nullable|url',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }
        $data['video_url'] = $request->input('video_url', $content->video_url);

        $content->update($data);

        return redirect()->route('admin.home')->with('success', 'Home page section updated!');
    }

    public function destroy($id)
    {
        HomePageContent::destroy($id);
        return redirect()->route('admin.home')->with('success', 'Home page section deleted!');
    }
}
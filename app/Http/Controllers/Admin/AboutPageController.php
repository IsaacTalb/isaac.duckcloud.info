<?php

namespace App\Http\Controllers\Admin;
use App\Models\AboutPageContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index()
    {
        $contents = AboutPageContent::all();
        return view('admin.about-page.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.about-page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string|max:255',
            'section_content' => 'required|string',
        ]);

        AboutPageContent::create($request->all());

        return redirect()->route('admin.about')
            ->with('success', 'About page created successfully.');
    }

    public function edit($id)
    {
        $content = AboutPageContent::findOrFail($id);
        return view('admin.about-page.edit', compact('content'));
    }


    public function update(Request $request, $id)
    {
        $content = AboutPageContent::findOrFail($id);

        $data = $request->validate([
            'section_title' => 'required|string|max:255',
            'section_content' => 'required|string',
        ]);

        $content->update($data);

        return redirect()->route('admin.about')->with('success', 'About page updated!');
    }

    public function destroy($id)
    {
        AboutPageContent::destroy($id);
        return redirect()->route('admin.about')->with('success', 'About page section deleted!');
    }
}

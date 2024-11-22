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

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'content' => 'required|string',
        ]);

        $aboutContent = AboutPageContent::findOrFail($id);
        $aboutContent->update($data);

        return redirect()->route('admin.about')->with('success', 'About page updated!');
    }
}

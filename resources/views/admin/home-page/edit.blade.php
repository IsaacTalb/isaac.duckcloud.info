@extends('admin.layout')

@section('title', 'Edit | Home Page Content')

@section('content')
<form action="{{ route('admin.home.edit', $content->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Fields similar to create.blade.php -->
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Section</h1>
        <form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="section_title" class="block font-medium">Title</label>
                <input type="text" name="section_title" id="section_title" class="border rounded w-full py-2 px-3">
            </div>
            <div>
                <label for="section_content" class="block font-medium">Content</label>
                <textarea name="section_content" id="section_content" class="border rounded w-full py-2 px-3">{{ old('section_content', $content->section_content) }}</textarea>
            </div>
            <div>
                <label for="image" class="block font-medium">Image</label>
                <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded mt-4">Save</button>
        </form>
    </div>
</form>

@endsection
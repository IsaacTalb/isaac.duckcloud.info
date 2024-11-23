@extends('admin.layout')

@section('title', 'Edit | Blog Posts')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Edit Post</h1>
    <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="6" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Featured Image</label>
            <input type="file" name="image" id="image" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-2 rounded-lg shadow" width="200">
            @endif
        </div>

        <div class="mb-4">
            <label for="video_url" class="block text-sm font-medium text-gray-700">Video URL</label>
            <input type="url" name="video_url" id="video_url" value="{{ $post->video_url }}" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug (Give Number)</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-500 transition">
            Update Post
        </button>
    </form>
</div>
@endsection

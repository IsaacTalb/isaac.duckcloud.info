@extends('layouts.front')

@section('title', 'Blog')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <!-- Blog Title -->
    <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">My Recent Posts</h1>

    <!-- Blog Posts -->
    <div class="space-y-12">
        @foreach($posts as $post)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="text-blue-600 hover:text-blue-800">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="text-blue-500 hover:text-blue-700 font-semibold">Read More &rarr;</a>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</div>
@endsection

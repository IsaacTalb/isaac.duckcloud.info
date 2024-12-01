@extends('layouts.front')

@section('title', 'Blog Posts')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <!-- Blog Title -->
    <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">My Recent Posts</h1>

    <!-- Blog Posts -->
    <div class="space-y-12">
        @foreach($posts as $post)
            <div class="flex flex-col md:flex-row bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <!-- Image -->
                @if ($post->image)
                    <div class="md:w-1/3 mb-4 md:mb-0">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg">
                    </div>
                @endif

                <!-- Content -->
                <div class="md:w-2/3 md:pl-6">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="text-blue-600 hover:text-blue-800">
                            {!! $post->title !!}
                        </a>
                    </h2>
                    <div class="text-gray-600 mb-4 container mx-auto p-6">{!! Str::limit($post->content, 200) !!}</div>
                    <br>
                    <div class="flex justify-between items-center">
                        <strong>Author: {{ $post->author }}</strong>
                        <p><em>Posted : {{ $post->created_at->diffForHumans() }}</em></p>
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Read More &rarr;</a>
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $posts->links('pagination::tailwind') }}
    </div>
</div>

<!-- Custom Scrollbar Animation -->
<style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #4f46e5, #3b82f6);
        border-radius: 4px;
        animation: scrollThumb 2s infinite alternate;
    }

    @keyframes scrollThumb {
        0% { background-color: #3b82f6; }
        100% { background-color: #4f46e5; }
    }
</style>
@endsection

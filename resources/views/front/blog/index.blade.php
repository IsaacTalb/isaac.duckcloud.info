@extends('layouts.front')

@section('title', 'Blog Posts')

@section('styles')
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

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Blog Title -->
    <h1 class="text-3xl sm:text-4xl font-bold text-center mb-8 text-gray-800">My Recent Posts</h1>

    <!-- Blog Posts -->
    <div class="space-y-12">
        @foreach($posts as $post)
            <div class="flex flex-col lg:flex-row bg-white p-6 sm:p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                @php
                    $image = isset($post->images) ? json_decode($post->images, true)[0] ?? null : $post->image;
                @endphp
                @if ($image)
                    <div class="lg:w-1/3 mb-4 lg:mb-0">
                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg object-cover">
                    </div>
                @endif

                <!-- Content -->
                <div class="lg:w-2/3 lg:pl-6">
                    <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-4">
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="text-blue-600 hover:text-blue-800">
                            {!! $post->title !!}
                        </a>
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base mb-4">{!! Str::limit($post->content, 200) !!}</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between items-start sm:items-center">
                        <div class="text-gray-700 text-sm sm:text-base mb-2 sm:mb-0">
                            <strong>Author: {{ $post->author }}</strong>
                        </div>
                        <div class="text-gray-500 text-xs sm:text-sm italic">
                            Posted: {{ $post->created_at->diffForHumans() }}
                        </div>
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="mt-4 sm:mt-0 sm:ml-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300 text-sm sm:text-base">
                            Read More &rarr;
                        </a>
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
@endsection

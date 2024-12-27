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

        /* Blog Cards Style */

        /* From Uiverse.io by Yaya12085 */ 
        .card {
        box-sizing: border-box;
        display: flex;
        max-width: 300px;
        background-color: rgba(255, 255, 255, 1);
        transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover {
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.081);
        }

        .date-time-container {
        writing-mode: vertical-lr;
        transform: rotate(180deg);
        padding: 0.5rem;
        }

        .date-time {
        display: flex;
        align-items: center;
        justify-content: space-between;
        grid-gap: 1rem;
        gap: 1rem;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: rgba(17, 24, 39, 1);
        }

        .separator {
        width: 1px;
        flex: 1 1 0%;
        background-color: rgba(17, 24, 39, 0.1);
        }

        .content {
        display: flex;
        flex: 1 1 0%;
        flex-direction: column;
        justify-content: space-between;
        }

        .infos {
        border-left: 1px solid rgba(17, 24, 39, 0.1);
        padding: 1rem;
        }

        .title {
        font-weight: 700;
        text-transform: uppercase;
        font-size: 18.72px;
        color: rgba(17, 24, 39, 1);
        }

        .description {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
        line-clamp: 5;
        margin-top: 0.5rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        color: rgba(55, 65, 81, 1);
        }

        .action {
        display: block;
        background-color: rgba(253, 224, 71, 1);
        padding: 0.75rem 1.25rem;
        text-align: center;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: rgba(17, 24, 39, 1);
        transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .action:hover {
        background-color: rgba(250, 204, 21, 1);
        }

    </style>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Blog Title -->
    <h1 class="text-3xl sm:text-4xl font-bold text-center mb-8 text-gray-800">My Recent Posts</h1>

    <!-- Blog Posts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Date-Time Section -->
            <div class="p-4 border-b">
                <time class="text-gray-500 text-sm" datetime="{{ $post->created_at }}">
                    <span>{{ $post->created_at->format('Y') }}</span>
                    <span class="mx-1">|</span>
                    <span>{{ $post->created_at->format('M d') }}</span>
                </time>
            </div>

            <!-- Content Section -->
            <div class="p-4">
                <!-- Image Section -->
                @php
                    $image = isset($post->images) ? json_decode($post->images, true)[0] ?? null : $post->image;
                @endphp
                @if ($image)
                <img src="{{ asset('storage/' . $image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover mb-4 rounded-lg">
                @endif

                <!-- Title -->
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">
                    <h2 class="text-lg font-semibold text-gray-800 hover:text-indigo-600">
                        {{ $post->title }}
                    </h2>
                </a>

                <!-- Content Excerpt -->
                <p class="text-sm text-gray-600 mt-2">
                    {!! Str::limit(strip_tags($post->content), 100) !!}
                </p>
            </div>

            <!-- Action Button -->
            <div class="p-4 border-t">
                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="text-indigo-600 hover:text-indigo-800 font-semibold text-sm">
                    Read More →
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $posts->links('pagination::tailwind') }}
    </div>
    <br class="border-gray-300 my-8">
    <br> <hr> <br>

    <!-- Google Ads Section -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3157572406863018"
        crossorigin="anonymous"></script>
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="autorelaxed"
        data-ad-client="ca-pub-3157572406863018"
        data-ad-slot="9833994156"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <br> <hr> <br>
</div>
@endsection




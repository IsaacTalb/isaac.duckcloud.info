@extends('layouts.front')

@section('title')
    {!! $post->title !!}
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-6 py-2">
    <!-- Blog Post Title -->
    <h1 class="text-4xl font-bold mb-2">{!! $post->title !!}</h1>

    <!-- Blog Post Author -->
    <p class="text-gray-600 mb-4">By {{ $post->author }} - {{ $post->updated_at->diffForHumans() }}</p>

    <!-- Blog Post Content --> 
    <p class="text-lg text-gray-700 mb-6">{!! $post->content !!}</p> 

    <!-- Image -->
    @if ($post->image)
        <div class="mb-6 mt-6">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg shadow-lg mx-auto aspect-square">
        </div>
    @endif

    <!-- Video -->
    @if ($post->video_url)
        <div class="mb-6 mt-6">
            <iframe 
                src="{{ $post->video_url }}" 
                frameborder="0" 
                allowfullscreen 
                class="w-full h-full rounded-lg shadow-lg"
            ></iframe>
        </div>
    @endif
    <br>
    <!-- Back to Home Button -->
    <a href="{{ route('blog.index') }}" class="inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
        ← Back to Blog Lists
    </a>

    <!-- Divider -->
    <br class="border-gray-300 my-8">

    <!-- Contact Form -->
    <div class="bg-white shadow-md rounded-lg p-6 mt-12">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact the Author</h2>
        
        <!-- Notification -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                <strong class="font-bold">Success!</strong>
                <span class="block">{{ session('success') }}</span>
            </div>
        @elseif(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{ session('error') }}</span>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your name"
                    required
                >
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your email"
                    required
                >
            </div>

            <!-- Message Input -->
            <div>
                <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                <textarea 
                    name="message" 
                    id="message" 
                    rows="6" 
                    class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter your message"
                    required
                ></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-3 rounded-md font-semibold hover:bg-blue-600 transition duration-300"
                >
                    Send
                </button>
            </div>
        </form>
    </div>
</div>
@endsection



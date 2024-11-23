@extends('layouts.front')

@section('title', 'Freelancer Portfolio')

@section('content')
<div class="max-w-7xl mx-auto p-6">

    <!-- Hero Section -->
    <div class="text-center py-16 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg mb-12">
        <h1 class="text-5xl font-bold mb-4">Hi, I'm Your Name</h1>
        <p class="text-lg font-light mb-6">I am a passionate freelancer specializing in web development, design, and digital marketing.</p>
        <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium shadow-lg hover:bg-gray-100">Hire Me</a>
    </div>

    <!-- About Me Section -->
    <div class="mb-16" id="about">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">About Me</h2>
        <p class="text-gray-600 text-lg text-center leading-relaxed max-w-3xl mx-auto">
            I am a highly skilled freelancer with years of experience in creating stunning websites, innovative solutions, and strategies to help businesses thrive. My mission is to deliver quality results for my clients.
        </p>
    </div>

    <!-- Services Section -->
    <div class="mb-16" id="services">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">What I Do</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                <h3 class="text-2xl font-bold mb-4">Web Development</h3>
                <p class="text-gray-600">Building responsive and modern websites tailored to your needs.</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                <h3 class="text-2xl font-bold mb-4">Graphic Design</h3>
                <p class="text-gray-600">Creating visually stunning designs that captivate audiences.</p>
            </div>
            <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                <h3 class="text-2xl font-bold mb-4">SEO & Marketing</h3>
                <p class="text-gray-600">Improving your online visibility and driving more traffic to your business.</p>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div class="mb-16" id="portfolio">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">My Work</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($contents as $content)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Section Title -->
                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-gray-700 mb-2">{{ $content->section_title }}</h3>
                        <p class="text-gray-600">{{ Str::limit($content->section_content, 100) }}</p>
                    </div>

                    <!-- Image or Video -->
                    @if ($content->image)
                        <img 
                            src="{{ asset('storage/' . $content->image) }}" 
                            alt="{{ $content->section_title }}" 
                            class="w-full h-64 object-cover"
                        >
                    @endif

                    @if ($content->video_url)
                        <div class="relative aspect-w-16 aspect-h-9">
                            <iframe 
                                class="absolute inset-0 w-full h-full" 
                                src="{{ $content->video_url }}" 
                                frameborder="0" 
                                allowfullscreen
                            ></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="mb-16" id="testimonials">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">What Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">"Amazing work! Delivered beyond my expectations."</p>
                <h4 class="text-gray-800 font-bold mt-4">- Client Name</h4>
            </div>
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">"Professional and timely delivery. Highly recommend."</p>
                <h4 class="text-gray-800 font-bold mt-4">- Client Name</h4>
            </div>
            <div class="p-6 bg-gray-50 shadow-lg rounded-lg">
                <p class="text-gray-600 italic">"Exceptional design and attention to detail. Great to work with."</p>
                <h4 class="text-gray-800 font-bold mt-4">- Client Name</h4>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="mb-16" id="contact">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Get in Touch</h2>
        <form action="{{ route('contact.store') }}" method="POST" class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-bold mb-2">Message</label>
                <textarea name="message" id="message" class="w-full border border-gray-300 p-2 rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow-lg hover:bg-blue-700">Send</button>
        </form>
    </div>

</div>
@endsection

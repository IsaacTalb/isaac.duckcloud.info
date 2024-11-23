@extends('layouts.front')

@section('title', 'About Us')

@section('content')
<div class="max-w-7xl mx-auto p-6">

    <!-- Hero Section -->
    <div class="text-center py-16 bg-gradient-to-r from-teal-500 to-blue-600 text-white rounded-lg mb-12">
        <h1 class="text-5xl font-bold mb-4 animate__animated animate__fadeIn">About Us</h1>
        <p class="text-lg font-light mb-6 animate__animated animate__fadeIn animate__delay-1s">
            We are passionate professionals dedicated to providing top-quality solutions to help businesses grow.
        </p>
        <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium shadow-lg hover:bg-gray-100 animate__animated animate__fadeIn animate__delay-2s">Get in Touch</a>
    </div>

    <!-- About Sections -->
    <div class="space-y-16">
        @foreach ($contents as $content)
            <div class="home-section p-6 bg-white shadow-lg rounded-lg">
                <div class="space-y-4">
                    <!-- Section Title -->
                    <h2 class="text-3xl font-bold text-gray-800">{{ $content->section_title }}</h2>
                    
                    <!-- Section Content -->
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{ $content->section_content }}
                    </p>

                    <!-- Image or Video -->
                    @if ($content->image)
                        <div class="mt-6">
                            <img 
                                src="{{ asset('storage/' . $content->image) }}" 
                                alt="{{ $content->section_title }}" 
                                class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300"
                            >
                        </div>
                    @endif

                    @if ($content->video_url)
                        <div class="mt-6 relative aspect-w-16 aspect-h-9">
                            <iframe 
                                class="absolute inset-0 w-full h-full rounded-lg shadow-md hover:scale-105 transition-transform duration-300" 
                                src="{{ $content->video_url }}" 
                                frameborder="0" 
                                allowfullscreen
                            ></iframe>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Team Section (Optional, can be customized further) -->
    <div class="mt-16 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 animate__animated animate__fadeIn">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                <img src="team-member.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
                <p class="text-gray-600">CEO & Founder</p>
                <p class="text-gray-600 mt-4">John is an expert in web development with over 10 years of experience in building top-tier websites.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                <img src="team-member.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">Jane Smith</h3>
                <p class="text-gray-600">Lead Designer</p>
                <p class="text-gray-600 mt-4">Jane is a talented designer with a keen eye for detail, creating visually stunning and user-friendly websites.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                <img src="team-member.jpg" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-bold text-gray-800">Mark Wilson</h3>
                <p class="text-gray-600">Marketing Specialist</p>
                <p class="text-gray-600 mt-4">Mark is our marketing guru, helping our clients grow their businesses by driving targeted traffic and conversions.</p>
            </div>
        </div>
    </div>

</div>
@endsection

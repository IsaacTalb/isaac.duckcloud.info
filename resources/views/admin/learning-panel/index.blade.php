@extends('admin.layout')

@section('title', 'Learning Resources')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for Content Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create content using HTML and Tailwind CSS for the Blog Section, Home Page, and About Page. Additionally, you'll learn about image usage, video embedding, and leveraging tools like ChatGPT for formatting blog posts, headings, asides, and content cards.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <!-- Blog Card -->
            <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow">
                <div class="flex-1 overflow-hidden">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog1.png') }}" class="object-cover w-full h-full" alt="">
                </div>
                <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                <div class="absolute inset-x-0 bottom-0 z-20 p-4">
                    <div class="bg-gray-900/50 rounded-lg p-4">
                        <p class="mb-1 text-sm text-white text-opacity-80">Isaac Talb • <time>18 Nov 2022</time></p>
                        <h3 class="text-xl font-medium text-white">Learn Blog Post Creation</h3>
                        <ul class="list-disc pl-6 mt-2">
                            <li class="text-gray-300">Create responsive layouts using Tailwind utility classes.</li>
                            <li class="text-gray-300">Use HTML elements like <code>&lt;aside&gt;</code>, <code>&lt;header&gt;</code>, and <code>&lt;section&gt;</code> to structure your content.</li>
                            <li class="text-gray-300">Design content cards with Tailwind's grid and flex utilities.</li>
                        </ul>
                    </div>
                    
                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('admin.learning-panel.blog-post.index') }}" class="inline-block bg-white text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors duration-300">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Home Page Card -->
            <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow">
                <div class="flex-1 overflow-hidden">
                    <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post4.png') }}" class="object-cover w-full h-full" alt="" />
                </div>
                <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                <div class="absolute inset-x-0 bottom-0 z-20 p-4">
                    <div class="bg-gray-900/50 rounded-lg p-4">
                        <p class="mb-1 text-sm text-white text-opacity-80">Isaac Talb • <time>18 Nov 2022</time></p>
                        <h3 class="text-xl font-medium text-white">Learn Home Page Creation</h3>
                        <ul class="list-disc pl-6 mt-2">
                            <li class="text-gray-300">Image and Video Embedding</li>
                            <li class="text-gray-300">Using AI and Tools for Content Creation</li>
                            <li class="text-gray-300">Optimize images for web and use <code>&lt;img&gt;</code> tags with Tailwind styling.</li>
                        </ul>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('admin.learning-panel.home-page.index') }}" class="inline-block bg-white text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors duration-300">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- About Page Card -->
            <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow">
                <div class="flex-1 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="object-cover w-full h-full" alt="" />
                </div>
                <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                <div class="absolute inset-x-0 bottom-0 z-20 p-4">
                    <div class="bg-gray-900/50 rounded-lg p-4">
                        <p class="mb-1 text-sm text-white text-opacity-80">Isaac Talb • <time>18 Nov 2022</time></p>
                        <h3 class="text-xl font-medium text-white">Learn About Page Creation</h3>
                        <ul class="list-disc pl-6 mt-2">
                            <li class="text-gray-300">Image and Video Embedding</li>
                            <li class="text-gray-300">Using AI and Tools for Content Creation</li>
                            <li class="text-gray-300">Optimize images for web and use <code>&lt;img&gt;</code> tags with Tailwind styling.</li>
                        </ul>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('admin.learning-panel.about-page.index') }}" class="inline-block bg-white text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors duration-300">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Contact Message Card -->
            <div class="relative flex flex-col items-stretch bg-white rounded-lg shadow">
                <div class="flex-1 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="object-cover w-full h-full" alt="" />
                </div>
                <div class="absolute inset-0 z-10 bg-gradient-to-t from-black"></div>
                <div class="absolute inset-x-0 bottom-0 z-20 p-4">
                    <div class="bg-gray-900/50 rounded-lg p-4">
                        <p class="mb-1 text-sm text-white text-opacity-80">Isaac Talb • <time>18 Nov 2022</time></p>
                        <h3 class="text-xl font-medium text-white">How to view Contact Messages</h3>
                        <ul class="list-disc pl-6 mt-2">
                            <li class="text-gray-300">View contact messages sent through the Contact form.</li>
                        </ul>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <a href="{{ route('admin.learning-panel.contact.index') }}" class="inline-block bg-white text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors duration-300">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

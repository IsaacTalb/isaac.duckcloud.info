@extends('admin.layout')

@section('title', 'Learning Resources')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for Content Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create content using HTML and Tailwind CSS for the Blog Section, Home Page, and About Page. Additionally, you'll learn about image usage, video embedding, and leveraging tools like ChatGPT for formatting blog posts, headings, asides, and content cards.
        </p>

        <div class="mb-6">
            <h2 class="text-xl font-semibold">Blog Post</h2>
            <ul class="list-disc pl-6 mt-2">
                <li>Create responsive layouts using Tailwind utility classes.</li>
                <li>Use HTML elements like <code>&lt;aside&gt;</code>, <code>&lt;header&gt;</code>, and <code>&lt;section&gt;</code> to structure your content.</li>
                <li>Design content cards with Tailwind's grid and flex utilities.</li>
            </ul>
            <a href="{{ route('admin.learning-panel.blog-post.index') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Learn More</a>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold">Home Page</h2>
            <ul class="list-disc pl-6 mt-2">
                <li>Image and Video Embedding</li>
                <li>Using AI and Tools for Content Creation</li>
                <li>Optimize images for web and use <code>&lt;img&gt;</code> tags with Tailwind styling.</li>
            </ul>
            <a href="{{ route('admin.learning-panel.home-page.index') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Learn More</a>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold">About Page</h2>
            <ul class="list-disc pl-6 mt-2">
                <li>Image and Video Embedding</li>
                <li>Using AI and Tools for Content Creation</li>
                <li>Optimize images for web and use <code>&lt;img&gt;</code> tags with Tailwind styling.</li>
            </ul>
            <a href="{{ route('admin.learning-panel.about-page.index') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Learn More</a>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold">View Contact Message</h2>
            <ul class="list-disc pl-6 mt-2">
                <li>View contact messages sent through the Contact form.</li>
            </ul>
            <a href="{{ route('admin.learning-panel.contact.index') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300">Learn More</a>
        </div>
    </div>
@endsection

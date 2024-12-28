@extends('admin.layout')

@section('title', 'Learning Panel | Blog Posts')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for Blog Post Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create blog posts using HTML and Tailwind CSS. You'll learn about responsive layouts, HTML elements, and Tailwind's grid and flex utilities for content cards.
        <i class="text-sm text-gray-500">Note: This guide is no need of a basic understanding of HTML and Tailwind CSS. You can use several AI tools to generate HTML and Tailwind CSS code.</i>
        <br>
        <span class="text-red-500 text-md mt-4">Please: Click the image to view clearly and double click to zoom in/out.</span>

        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                <a href="{{ asset('assets/img/learning-panel/blog/learn-blog1.png') }}" data-lightbox="image-1" data-title="Step 1: Click &quot;Create Blog Post&quot; and give title.">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog1.png') }}" alt="step 1" class="w-full h-auto mb-4">
                </a>
                <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-yellow-100 p-2 rounded">Step 1: Click "Create Blog Post" and give title.</span>
            </div>
            <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                <a href="{{ asset('assets/img/learning-panel/blog/learn-blog2.png') }}" data-lightbox="image-2" data-title="Step 2: Go to any AI free chat and type &quot;Create a content for blog post based on my desire content blog post by using HTML, Tailwind and copy to content section.&quot;">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog2.png') }}" alt="step 2" class="w-full h-auto mb-4">
                </a>
                <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-green-100 p-2 rounded">Step 2: Go to any AI free chat and type "Create a content for blog post based on my desire content blog post by using HTML, Tailwind and copy to content section."</span>
            </div>
            <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                <a href="{{ asset('assets/img/learning-panel/blog/learn-blog3.png') }}" data-lightbox="image-3" data-title="Step 3: Upload multiple images & video embedded are optional and still you can use photo or video embedded in the content section.">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog3.png') }}" alt="step 3" class="w-full h-auto mb-4">
                </a>
                <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-blue-100 p-2 rounded">Step 3: Upload multiple images & video embedded are optional and still you can use photo or video embedded in the content section.</span>
            </div>
            <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                <a href="{{ asset('assets/img/learning-panel/blog/learn-blog4.png') }}" data-lightbox="image-4" data-title="Step 4: Give a slug name with your desire and it will be appear in behnid of the domain/blog/slug-name.">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog4.png') }}" alt="step 4" class="w-full h-auto mb-4">
                </a>
                <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-orange-100 p-2 rounded">Step 4: Give a slug name with your desire and it will be appear in behnid of the domain/blog/slug-name.</span>
            </div>
            <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                <a href="{{ asset('assets/img/learning-panel/blog/learn-blog5.png') }}" data-lightbox="image-5" data-title="Step 5: Give an author name based on who created the blog post and click create and then boommm it's all finished.">
                    <img src="{{ asset('assets/img/learning-panel/blog/learn-blog5.png') }}" alt="step 5" class="w-full h-auto mb-4">
                </a>
                <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-red-100 p-2 rounded">Step 5: Give an author name based on who created the blog post and click create and then boommm it's all finished.</span>
            </div>
        </div>
        <div class="flex items-center space-x-4 mt-8 mb-6 sm:mb-0">
            <a href="{{ route('admin.learning-panel') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> <-- Back to Learning Panel</a>
        </div>
    </div>
@endsection


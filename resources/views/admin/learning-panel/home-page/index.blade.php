@extends('admin.layout')

@section('title', 'Learning Panel | Home Page')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for Home Page Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create home page using HTML and Tailwind CSS. You'll learn about responsive layouts, HTML elements, and Tailwind's grid and flex utilities for content cards.
            <i class="text-sm text-gray-500">Note: This guide is no need of a basic understanding of HTML and Tailwind CSS. You can use several AI tools to generate HTML and Tailwind CSS code.</i>
            <br>
            <span class="text-red-500 text-md mt-4">Please: Click the image to view clearly and double click to zoom in/out.</span>
        </p>

        <div class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/home-page/homepage-post5.png') }}" data-lightbox="image-1" data-title="Step 1: Click Add section and give it a title of your own.">
                        <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post5.png') }}" alt="step 1" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-yellow-100 p-2 rounded">Step 1: Click Add section and give it a title of your own.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/home-page/homepage-post1.png') }}" data-lightbox="image-2" data-title="Step 2: Go to any AI free chat such as chatGPT, Gemini, or Claude and then type create a caption for some things you want to upload as activities or events or anything.">
                        <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post1.png') }}" alt="step 2" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-green-100 p-2 rounded">Step 2: Go to any AI free chat such as chatGPT, Gemini, or Claude and then type create a caption for some things you want to upload as activities or events or anything.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/home-page/homepage-post2.png') }}" data-lightbox="image-3" data-title="Step 3: Copy the code and paste it into the content section.">
                        <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post2.png') }}" alt="step 3" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-blue-100 p-2 rounded">Step 3: Copy the code and paste it into the content section.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/home-page/homepage-post4.png') }}" data-lightbox="image-4" data-title="Step 4: Upload images as much as you can (recommend is 3 to 5 images).">
                        <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post4.png') }}" alt="step 4" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-orange-100 p-2 rounded">Step 4: Upload images as much as you can (recommend is 3 to 5 images).</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/home-page/homepage-post5.png') }}" data-lightbox="image-5" data-title="Step 5: After that click done or create. Then boommm it's all complete.">
                        <img src="{{ asset('assets/img/learning-panel/home-page/homepage-post5.png') }}" alt="step 5" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-red-100 p-2 rounded">Step 5: After that click done or create. Then boommm it's all complete.</span>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-8 mb-6 sm:mb-0">
                <a href="{{ route('admin.learning-panel') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> <-- Back to Learning Panel</a>
            </div>
        </div>
    </div>
@endsection
@extends('admin.layout')

@section('title', 'Learning Panel | About Page')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for About Page Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create about page using HTML and Tailwind CSS. You'll learn about responsive layouts, HTML elements, and Tailwind's grid and flex utilities for content cards.
        </p>

        <div class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/about-page/about-page5.png') }}" data-lightbox="image-1" data-title="Step 1: Click on 'Add Section' and provide a unique title for your about page section.">
                        <img src="{{ asset('assets/img/learning-panel/about-page/about-page5.png') }}" alt="step 1" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-yellow-100 p-2 rounded">Step 1: Click on 'Add Section' and provide a unique title for your about page section.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/about-page/about-page1.png') }}" data-lightbox="image-2" data-title="Step 2: Utilize an AI tool to generate a concise and informative about page content with HTML and Tailwind CSS. Ensure the content is between 500 to 800 characters.">
                        <img src="{{ asset('assets/img/learning-panel/about-page/about-page1.png') }}" alt="step 2" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-green-100 p-2 rounded">Step 2: Utilize an AI tool to generate a concise and informative about page content with HTML and Tailwind CSS. Ensure the content is between 500 to 800 characters.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/about-page/about-page2.png') }}" data-lightbox="image-3" data-title="Step 3: Copy and paste the generated code into the content section. Make sure to only copy the necessary section, such as a div, p, or span.">
                        <img src="{{ asset('assets/img/learning-panel/about-page/about-page2.png') }}" alt="step 3" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-blue-100 p-2 rounded">Step 3: Copy and paste the generated code into the content section. Make sure to only copy the necessary section, such as a div, p, or span.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/about-page/about-page3.png') }}" data-lightbox="image-4" data-title="Step 4: Upload a single image, as it will be used as the background image on your about page (front page).">
                        <img src="{{ asset('assets/img/learning-panel/about-page/about-page3.png') }}" alt="step 4" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-orange-100 p-2 rounded">Step 4: Upload a single image, as it will be used as the background image on your about page (front page).</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/about-page/about-page4.png') }}" data-lightbox="image-5" data-title="Step 5: Click 'Save' and your about page content will be updated within a few minutes.">
                        <img src="{{ asset('assets/img/learning-panel/about-page/about-page4.png') }}" alt="step 5" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-red-100 p-2 rounded">Step 5: Click 'Save' and your about page content will be updated within a few minutes.</span>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-8 mb-6 sm:mb-0">
                <a href="{{ route('admin.learning-panel') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> <-- Back to Learning Panel</a>
            </div>
        </div>
    </div>
@endsection
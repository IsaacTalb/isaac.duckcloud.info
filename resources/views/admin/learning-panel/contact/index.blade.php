@extends('admin.layout')

@section('title', 'Learning Panel | Contact')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Learning Resources for Contact Creation</h1>
        <p class="mb-6 text-gray-600">
            This guide will help you create contact using HTML and Tailwind CSS. You'll learn about responsive layouts, HTML elements, and Tailwind's grid and flex utilities for content cards.
        </p>

        <div class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/contact/contact-message1.png') }}" data-lightbox="image-1" data-title="Step 1: Navigate to 'View' in the admin panel to access contact messages.">
                        <img src="{{ asset('assets/img/learning-panel/contact/contact-message1.png') }}" alt="Step 1" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-yellow-100 p-2 rounded">Step 1: Navigate to 'View' in the admin panel to access contact messages.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/contact/contact-message2.png') }}" data-lightbox="image-2" data-title="Step 2: Review the contact message details on the admin contact page.">
                        <img src="{{ asset('assets/img/learning-panel/contact/contact-message2.png') }}" alt="Step 2" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-green-100 p-2 rounded">Step 2: Review the contact message details on the admin contact page.</span>
                </div>
                <div class="flex flex-col items-center p-4 border border-gray-300 rounded-lg">
                    <a href="{{ asset('assets/img/learning-panel/contact/contact-message3.png') }}" data-lightbox="image-3" data-title="Step 3: Utilize the provided contact information to respond to the user as needed.">
                        <img src="{{ asset('assets/img/learning-panel/contact/contact-message3.png') }}" alt="Step 3" class="w-full h-auto mb-4">
                    </a>
                    <span class="text-base md:text-lg lg:text-xl xl:text-2xl bg-blue-100 p-2 rounded">Step 3: Utilize the provided contact information to respond to the user as needed.</span>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-8 mb-6 sm:mb-0">
                <a href="{{ route('admin.learning-panel') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> <-- Back to Learning Panel</a>
            </div>
        </div>
    </div>
@endsection
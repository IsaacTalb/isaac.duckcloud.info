@extends('layouts.front')

@section('title', '2025 | Top 20 Frontend Projects for Beginners')

@section('content')
<div class="container mx-auto p-4">
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Top 20 Frontend Projects for Beginners | 2025</h1>
    
    <section class="mb-8 bg-[rgba(255,255,255,0.5)] rounded-lg shadow-lg p-6 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 lg:px-0">
            <!-- 'weather' => 'Weather App', 'quiz' => 'Quiz Game', 'gallery' => 'Image Gallery', 'chatbot' => 'Simple Chatbot', 'portfolio' => 'Portfolio Website', 'blog' => 'Simple Blog', 'countdown' => 'Countdown Timer', 'rock-paper-scissors' => 'Rock Paper Scissors', 'simon-says' => 'Simon Says Game', 'clock' => 'Simple Clock', 'quote' => 'Random Quote Generator', 'guessing' => 'Guessing Game', 'shopping-cart' => 'Simple Shopping Cart', 'form-validation' => 'Simple Form Validation', 'localstorage-todo' => 'To-Do List with LocalStorage', 'timer' => 'Simple Timer', 'breakout' => 'Breakout Game' -->
            @foreach(['todo' => 'To Do List', 'calculator' => 'Calculator'] as $route => $project)
                <div class="bg-gradient-to-r from-black to-gray-400 rounded-lg shadow-lg p-6 transform hover:scale-102 transition-transform duration-300">
                    <h2 class="text-xl text-white font-semibold mb-4">{{ $project }}</h2>
                    <img src="https://static.vecteezy.com/system/resources/previews/010/136/326/non_2x/procedures-project-line-icon-with-checklist-vector.jpg" alt="{{ $project }}" class="w-1/2 mx-auto mb-4">
                    <p class="text-gray-200 mb-4">A brief description of the {{ $project }} project.</p>
                    <div class="flex justify-center">
                        <a href="{{ route('top20.' . $route) }}" class="px-6 py-2 rounded-full bg-white text-black font-semibold hover:bg-gray-200">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/script.js'])

@endsection


@extends('layouts.front')

@section('title', '2024 | Top 20 Frontend Projects for Beginners')

@section('content')
<div class="container mx-auto p-4">
    <!-- Add Vite directive for CSS -->
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Top 20 Frontend Projects for Beginners</h1>

    <ul class="space-y-2">
        <li><a href="{{ route('top20.todo') }}" class="hover:text-gray-300 transition-colors">To Do List</a></li>
        <li><a href="{{ route('top20.calculator') }}" class="hover:text-gray-300 transition-colors">Calculator</a></li>
        <li>Weather App</li>
        <li>Quiz Game</li>
        <li>Image Gallery</li>
        <li>Simple Chatbot</li>
        <li>Portfolio Website</li>
        <li>Simple Blog</li>
        <li>Countdown Timer</li>
        <li>Rock Paper Scissors</li>
        <li>Simon Says Game</li>
        <li>Simple Clock</li>
        <li>Random Quote Generator</li>
        <li>Guessing Game</li>
        <li>Simple Shopping Cart</li>
        <li>Simple Form Validation</li>
        <li>To-Do List with LocalStorage</li>
        <li>Simple Timer</li>
        <li>Breakout Game</li>
    </ul>
    
    
</div>

<!-- Add Vite directive for JS at the bottom -->
@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/script.js'])

@endsection

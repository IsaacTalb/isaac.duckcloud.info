@extends('layouts.front')

@section('title', 'Isaac | Calculator')

@section('content')
<div class="container mx-auto p-4">
    <!-- Add Vite directive for CSS -->
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/calculator/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Calculator</h1>
    
    
</div>

<!-- Add Vite directive for JS at the bottom -->
@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/calculator/script.js'])

@endsection
@extends('layouts.front')

@section('title', '2025 | Top 20 Frontend Projects for Beginners')

@section('content')
<div class="container mx-auto p-4">
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Top 20 Frontend Projects for Beginners | 2025</h1>
    
    <section class="mb-8 bg-[rgba(255,255,255,0.5)] rounded-lg shadow-lg p-6 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 lg:px-0">
            @foreach([
                [
                    'name' => 'To Do List',
                    'image' => 'https://as1.ftcdn.net/v2/jpg/02/95/16/34/1000_F_295163487_v4cd1FbRY2qhtBEV5dM5D0pcy0qrrupc.jpg',
                    'description' => 'A simple to do list app with a form to add new tasks and a list to display the tasks.',
                    'route' => 'todo',
                ],
                [
                    'name' => 'Calculator',
                    'image' => 'https://cdn.vectopus.com/getillustrations/illustrations/E1953FD2658A/6A90CFDE78E6/uploads-business-and-finance-accounting-math-device-calculator-hand-gesture-1024.png',
                    'description' => 'A simple calculator app with a form to input the numbers and a button to calculate the result.',
                    'route' => 'calculator',
                ],
            ] as $project)
                <div class="bg-gradient-to-r from-black to-gray-400 rounded-lg shadow-lg p-6 transform hover:scale-102 transition-transform duration-300">
                    <h2 class="text-xl text-white font-semibold mb-4">{{ $project['name'] }}</h2>
                    <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-1/2 mx-auto mb-4">
                    <p class="text-gray-200 mb-4">{{ $project['description'] }}</p>
                    <div class="flex justify-center">
                        <a href="{{ route('top20.' . $project['route']) }}" class="px-6 py-2 rounded-full bg-white text-black font-semibold hover:bg-gray-200">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/script.js'])

@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Andrew')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <header class="bg-gray-800 text-white p-4">
        <nav class="max-w-7xl mx-auto flex justify-between">
        <a href="{{ route('home') }}" class="text-xl font-bold">Andrew</a>
            <div>
                <a href="{{ route('about') }}" class="mr-4">About</a>
                <a href="{{ route('blog.index') }}" class="mr-4">Blog</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>
    <main class="py-6">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; {{ date('Y') }} My Portfolio. All Rights Reserved.
    </footer>
</body>
</html>

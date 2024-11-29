@extends('layouts.front')

@section('title', 'Contact Me')

@section('content')
<div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <!-- Page Title -->
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Any inquiries accepted!</h1>

    <!-- Notification -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Success!</strong>
            <span class="block">{{ session('success') }}</span>
        </div>
    @elseif(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Error!</strong>
            <span class="block">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Contact Form -->
    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Name Input -->
        <div>
            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Enter your name"
                required
            >
        </div>

        <!-- Email Input -->
        <div>
            <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Enter your email"
                required
            >
        </div>

        <!-- Message Input -->
        <div>
            <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message</label>
            <textarea 
                name="message" 
                id="message" 
                rows="6" 
                class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Enter your message"
                required
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-3 rounded-md font-semibold hover:bg-blue-600 transition duration-300"
            >
                Send
            </button>
        </div>
    </form>
</div>
@endsection

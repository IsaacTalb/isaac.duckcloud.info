@extends('layouts.front')

@section('title', 'Isaac | Todo List')

@section('content')
<div class="container mx-auto p-4">
    <!-- Add Vite directive for CSS -->
    @vite(['resources/css/app.css', 'resources/css/top-20-projects-2025/todo/styles.css'])

    <h1 class="text-4xl font-bold mb-8 text-gray-800">Advanced Todo List</h1>
    
    <!-- Todo Form -->
    <form id="todoForm" class="mb-8 bg-white p-6 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Task Title</label>
                <input type="text" id="taskTitle" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Schedule Time</label>
                <input type="datetime-local" id="taskTime" class="w-full p-2 border rounded-md" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Alarm Before</label>
                <select id="alarmOffset" class="w-full p-2 border rounded-md">
                    <option value="5">5 minutes</option>
                    <option value="10">10 minutes</option>
                    <option value="15">15 minutes</option>
                </select>
            </div>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">Add Task</button>
        <button id="stopAlarm" class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors float-right" onclick="window.location.reload()">Stop Alarm</button>       
    </form>

    <!-- Todo List -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Your Tasks</h2>
        <ul id="todoList" class="space-y-3"></ul>
    </div>

    <!-- Reports Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Activity Reports</h2>
        <div id="reports" class="grid grid-cols-1 md:grid-cols-3 gap-4"></div>
    </div>

    <!-- Enhanced Share Modal with More Options
    <div id="shareModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg w-96">
            <h3 class="text-lg font-semibold mb-4">Share Task</h3>
            <div class="space-y-2">
                <button data-platform="whatsapp" class="share-btn w-full bg-green-600 text-white p-2 rounded-md hover:bg-green-700">
                    WhatsApp
                </button>
                <button data-platform="telegram" class="share-btn w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">
                    Telegram
                </button>
                <button data-platform="facebook" class="share-btn w-full bg-blue-800 text-white p-2 rounded-md hover:bg-blue-900">
                    Facebook
                </button>
                <button data-platform="twitter" class="share-btn w-full bg-black text-white p-2 rounded-md hover:bg-gray-800">
                    X (Twitter)
                </button>
                <button data-platform="email" class="share-btn w-full bg-red-600 text-white p-2 rounded-md hover:bg-red-700">
                    Email
                </button>
            </div>
            <button class="close-share-modal mt-4 w-full bg-gray-600 text-white p-2 rounded-md hover:bg-gray-700">
                Close
            </button>
        </div>
    </div> -->
</div>

<!-- Add Vite directive for JS at the bottom -->
@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/todo/script.js'])

@endsection
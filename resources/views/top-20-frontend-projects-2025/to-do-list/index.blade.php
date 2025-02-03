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

    <div class="mt-8 bg-gray-200 p-4 rounded-lg">
        <h2 class="text-lg font-medium text-gray-800 mb-2">Source Code Snippets</h2>
        <div class="space-y-4">

            <!-- HTML Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    HTML 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="html-code">Copy</button>
                </h3>
                <pre id="html-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 300px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>

            <!-- CSS Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    CSS 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="css-code">Copy</button>
                </h3>
                <pre id="css-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 300px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>

            <!-- JavaScript Code -->
            <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    JavaScript 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="js-code">Copy</button>
                </h3>
                <pre id="js-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 80px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div>

            <!-- JSON Data (Optional) -->
            <!-- <div>
                <h3 class="font-medium text-gray-700 flex justify-between items-center mb-2">
                    JSON 
                    <button class="copy-btn bg-blue-500 text-white px-2 py-1 rounded text-sm" data-target="json-code">Copy</button>
                </h3>
                <pre id="json-code" style="background-color: black; color:rgb(39, 214, 65); font-size: 0.8rem; height: 300px; overflow: auto; scrollbar-width: thin; scrollbar-color:rgb(176, 187, 193) #000000;">
                </pre>
            </div> -->

        </div>
    </div>

    <div class="flex justify-between items-center mt-12">
        <div>
            <a href="https://github.com/IsaacTalb/" target="_blank" rel="noopener noreferrer">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2048px-Octicons-mark-github.svg.png" alt="Github Logo" class="h-6 w-6">
            </a>
        </div>
        <div class="text-center">
            <p class="text-sm text-gray-600">This is part of the <a href="https://github.com/IsaacTalb/top-20-beginner-project-2025/tree/main/to-do-app" target="_blank" rel="noopener noreferrer" class="text-blue-600 underline">Top 20 Frontend Projects 2025</a> repository.</p>
            <p class="text-sm text-gray-600">Contact me at <a href="mailto:isaac@duckcloud.info" class="text-blue-600 underline">isaac@duckcloud.info</a> if you want to contribute or have any questions.</p>
        </div>
    </div>

</div>

<!-- Add Vite directive for JS at the bottom -->
@vite(['resources/js/app.js', 'resources/js/top-20-projects-2025/todo/script.js'])

@endsection

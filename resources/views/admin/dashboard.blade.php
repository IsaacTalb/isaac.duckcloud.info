<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Welcome to the Admin Dashboard</h3>
                <p class="mb-4">Manage your site content here.</p>
                <ul class="list-disc ml-4">
                    <li><a href="{{ route('blog-posts.index') }}" class="text-blue-500 underline">Manage Blog Posts</a></li>
                    <li><a href="{{ route('admin.home') }}" class="text-blue-500 underline">Edit Home Page</a></li>
                    <li><a href="{{ route('admin.about') }}" class="text-blue-500 underline">Edit About Page</a></li>
                    <li><a href="{{ route('admin.messages') }}" class="text-blue-500 underline">View Contact Messages</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

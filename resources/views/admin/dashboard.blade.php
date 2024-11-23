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
                <p class="mb-6 text-gray-600">
                    Use the options below to manage various sections of your website. Click on a card to perform actions like Create, Edit, Update, or Delete content.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1: Blog Management -->
                    <a href="{{ route('admin.blog') }}" class="block p-6 bg-blue-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-blue-800">## Manage Blog Posts</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Create, update, or delete blog posts. Use this section to keep your blog content fresh and relevant.
                        </p>
                    </a>

                    <!-- Card 2: Home Page -->
                    <a href="{{ route('admin.home') }}" class="block p-6 bg-green-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-green-800">## Edit Home Page</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Update the content of your website's home page to ensure visitors get the latest information.
                        </p>
                    </a>

                    <!-- Card 3: About Page -->
                    <a href="{{ route('admin.about') }}" class="block p-6 bg-yellow-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-yellow-800">## Edit About Page</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Keep your "About" section updated with your latest story or business details.
                        </p>
                    </a>

                    <!-- Card 4: Contact Messages -->
                    <a href="{{ route('admin.messages') }}" class="block p-6 bg-red-100 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h4 class="font-bold text-lg text-red-800">## View Contact Messages</h4>
                        <p class="text-sm text-gray-600 mt-2">
                            Check and respond to messages sent via the contact form to stay connected with your audience.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('admin.layout')

@section('title', 'Create | Blog Post')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">Create New Post</h1>
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-lg p-6">
        @csrf

        <div class="mb-4">
            <em class="text-sm text-red-500 mb-4 font-bold ">Note: Content could be text or html-tailwind code.</em>
            <br>
            <label for="title" class="block text-sm font-medium text-gray-700">Title (required) : Recommend Normal Text</label>
            <input type="text" name="title" id="title" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post title" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content (required) : Recommend Tailwind & Html Code</label>
            <textarea name="content" id="content" rows="10" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post content (tailwind & html code) & avoid using container class" required></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Featured Image (optional but recommended)</label>
            <input type="file" name="image" id="image" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="video_url" class="block text-sm font-medium text-gray-700">Video URL (work in progress)</label>
            <input type="url" name="video_url" id="video_url" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post video url">
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug (required): Slug mean, a unique identifier for the post URL in the browser address bar.</label>
            <input type="text" name="slug" id="slug" 
                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post slug: Example: my-first-post" required >
        </div>

        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Author (optional but if you do not fill this field, the default author < Unknown > will be used) </label>
            <input type="text" name="author" id="author" 
                class="form-control mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post author">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-500 transition">
            Create Post
        </button>
        <a href="{{ route('admin.blog') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> Cancel </a>

    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#content', // Target the content textarea
        plugins: 'image media link code table fullscreen preview lists',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | preview fullscreen',
        height: 500,
        relative_urls: false,
        remove_script_host: false,
        document_base_url: "{{ url('/') }}", // Adjust to your base URL
        file_picker_callback: (callback, value, meta) => {
            if (meta.filetype === 'image') {
                // Example file picker implementation
                callback('https://via.placeholder.com/150', { alt: 'Placeholder Image' });
            }
        }
    });
</script>
@endsection


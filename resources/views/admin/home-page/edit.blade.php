@extends('admin.layout')

@section('title', 'Edit | Home Page Content')

@section('content')
<form action="{{ route('admin.home.edit', $content->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Fields similar to create.blade.php -->
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Add New Section</h1>
        <form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>   
                <label for="section_title" class="block font-medium">Title</label>
                <input type="text" name="section_title" id="section_title" class="border rounded w-full py-2 px-3" value="{{ old('section_title', $content->section_title) }}">
            </div>
            <div>
                <label for="section_content" class="block font-medium">Content</label>
                <textarea name="section_content" id="section_content" class="border rounded w-full py-2 px-3">{{ old('section_content', $content->section_content) }}</textarea>
            </div>
            <div>
                <label for="image" class="block font-medium">Image</label>
                <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3" value="{{ old('image', $content->image) }}">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded mt-4">Save</button>
            <a href="{{ route('admin.home') }}" class="inline-block bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition-colors duration-300"> Cancel </a>
        </form>
    </div>
</form>

@endsection


@section('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#section_content', // Target the content textarea
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


@extends('admin.layout')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Home Page Content</h1>
        <a href="{{ route('admin.home.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">
            Add Section
        </a>
    </div>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Section Title</th>
                <th class="py-2 px-4 border-b">Content</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
            <tr>
                <td class="py-2 px-4 border-b">{{ $content->section_title }}</td>
                <td class="py-2 px-4 border-b">{{ Str::limit($content->section_content, 50) }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.home.edit', $content->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.home.destroy', $content->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

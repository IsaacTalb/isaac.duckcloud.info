@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="mt-4">Edit Post</h1>
    <form action="{{ route('blog-posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="6" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Featured Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="mt-2" width="200">
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="video_url">Video URL</label>
            <input type="url" name="video_url" id="video_url" class="form-control" value="{{ $post->video_url }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection

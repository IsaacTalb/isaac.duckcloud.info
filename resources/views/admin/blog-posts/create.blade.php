@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="mt-4">Create New Post</h1>
    <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="6" class="form-control" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Featured Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="video_url">Video URL</label>
            <input type="url" name="video_url" id="video_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection

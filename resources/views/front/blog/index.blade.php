@extends('layouts.front')

@section('title', 'Blog')

@section('content')
<div class="max-w-7xl mx-auto">
<h1 class="text-3xl font-bold mb-4">My Recent Posts</h1>
    @foreach($posts as $post)
        <div class="mb-6">
            <h2 class="text-2xl font-bold"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->content, 150) }}</p>
        </div>
    @endforeach

    <div>{{ $posts->links() }}</div>
</div>
@endsection

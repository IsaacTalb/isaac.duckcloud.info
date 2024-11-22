@extends('layouts.front')

@section('title', $post->title)

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    if ($post->image) {
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
    }
    endif
    if ($post->video_url) {
        <iframe width="560" height="315" src="{{ $post->video_url }}" frameborder="0" allowfullscreen></iframe>
    }
    endif
</div>
@endsection

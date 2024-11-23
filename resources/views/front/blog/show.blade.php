@extends('layouts.front')

@section('title', $post->title)

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold mb-8">{{ $post->title }}</h1>
    <p class="text-lg text-gray-700 mb-6">{{ $post->content }}</p>

    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="mb-6 max-w-full rounded-lg shadow-lg">
    @endif

    @if ($post->video_url)
        <iframe width="560" height="315" src="{{ $post->video_url }}" frameborder="0" allowfullscreen class="mb-6"></iframe>
    @endif
</div>
@endsection

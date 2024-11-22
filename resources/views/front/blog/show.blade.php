@extends('layouts.front')

@section('title', $post->title)

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
</div>
@endsection

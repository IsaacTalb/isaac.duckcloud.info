@extends('layouts.front')

@section('title', 'Client-1 Portfolio')

@section('content')
<div class="max-w-7xl mx-auto">
    @foreach ($contents as $content)
        <div class="home-section">
            <h2>{{ $content->section_title }}</h2>
            <p>{{ $content->section_content }}</p>
            @if ($content->image)
                <img src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->section_title }}">
            @endif
            @if ($content->video_url)
                <iframe width="560" height="315" src="{{ $content->video_url }}" frameborder="0" allowfullscreen></iframe>
            @endif
            <hr>
        </div>
    @endforeach
</div>
@endsection

@extends('layouts.front')

@section('title', 'About Us')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">About Us</h1>
    <p>{{ $content->content }}</p>
</div>
@endsection

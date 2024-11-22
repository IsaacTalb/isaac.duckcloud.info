@extends('layouts.front')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-sm font-bold mb-2">Message</label>
            <textarea name="message" id="message" class="w-full border border-gray-300 p-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
    </form>
</div>
@endsection

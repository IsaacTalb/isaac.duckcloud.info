@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="mt-4">Contact Message</h1>
    <p><strong>Name:</strong> {{ $message->name }}</p>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $message->message }}</p>
    <a href="{{ route('admin.messages') }}" class="btn btn-secondary">Back to Messages</a>
</div>
@endsection

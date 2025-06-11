@extends('layouts.app')
@section('content')
<div class="container mx-auto max-w-md py-8">
    <h2 class="text-2xl font-bold mb-6">Register</h2>
    <form method="POST" action="{{ route('register') }}" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            @error('email')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password" id="password" required class="w-full border border-gray-300 rounded px-3 py-2">
            @error('password')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block mb-1 font-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded font-semibold">Register</button>
    </form>
    <div class="mt-4 text-center">
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Already have an account? Login</a>
    </div>
</div>
@endsection

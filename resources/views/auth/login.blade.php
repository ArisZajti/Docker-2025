@extends('layouts.app')
@section('content')
<div class="container mx-auto max-w-md py-8">
    <h2 class="text-2xl font-bold mb-6">Login</h2>
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="w-full border border-gray-300 rounded px-3 py-2">
            @error('email')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password" id="password" required class="w-full border border-gray-300 rounded px-3 py-2">
            @error('password')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded font-semibold">Login</button>
    </form>
    <div class="mt-4 text-center">
        <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Don't have an account? Register</a>
    </div>
</div>
@endsection

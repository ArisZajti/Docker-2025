@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-lg px-2 md:px-0">
    <h2 class="text-xl md:text-2xl font-bold mb-6 text-indigo-700 text-center">Menu Item Details</h2>
    <div class="bg-white p-4 md:p-6 rounded shadow">
        <div class="mb-4">
            <span class="font-semibold">Name:</span> {{ $menu->name }}
        </div>
        <div class="mb-4">
            <span class="font-semibold">Type:</span> <span class="capitalize">{{ $menu->type }}</span>
        </div>
        <div class="mb-4">
            <span class="font-semibold">Price:</span> €{{ number_format($menu->price, 2) }}
        </div>
        <div class="mb-4">
            <span class="font-semibold">Description:</span> {{ $menu->description }}
        </div>
        <div class="flex flex-col md:flex-row justify-between gap-2 md:gap-0 mt-6">
            <a href="{{ route('menus.index') }}" class="text-gray-600 hover:underline text-center md:text-left">Back to Menu</a>
            <a href="{{ route('menus.edit', $menu) }}" class="text-yellow-600 hover:underline text-center md:text-left">Edit</a>
        </div>
    </div>
</div>
@endsection

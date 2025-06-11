@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-indigo-700">Add Menu Item</h2>
    <form action="{{ route('menus.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
            @error('name')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="type">Type</label>
            <select name="type" id="type" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
                <option value="food" @selected(old('type')=='food')>Food</option>
                <option value="drink" @selected(old('type')=='drink')>Drink</option>
            </select>
            @error('type')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="price">Price (€)</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
            @error('price')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="description">Description</label>
            <textarea name="description" id="description" rows="3" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">{{ old('description') }}</textarea>
            @error('description')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-between">
            <a href="{{ route('menus.index') }}" class="text-gray-600 hover:underline">Back</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded transition">Save</button>
        </div>
    </form>
</div>
@endsection

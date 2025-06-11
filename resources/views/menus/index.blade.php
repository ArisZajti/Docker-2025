@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-6 text-center text-indigo-700">Magic Food Menu</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('menus.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded transition">Add Menu Item</a>
    </div>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded-lg">
            <thead class="bg-indigo-100">
                <tr>
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Type</th>
                    <th class="py-3 px-4 text-left">Price</th>
                    <th class="py-3 px-4 text-left">Description</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menus as $menu)
                <tr class="border-b hover:bg-indigo-50">
                    <td class="py-2 px-4 font-medium">{{ $menu->name }}</td>
                    <td class="py-2 px-4 capitalize">{{ $menu->type }}</td>
                    <td class="py-2 px-4">€{{ number_format($menu->price, 2) }}</td>
                    <td class="py-2 px-4">{{ $menu->description }}</td>
                    <td class="py-2 px-4 flex gap-2">
                        <a href="{{ route('menus.show', $menu) }}" class="text-blue-600 hover:underline">View</a>
                        <a href="{{ route('menus.edit', $menu) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('menus.destroy', $menu) }}" method="POST" onsubmit="return confirm('Delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-4 text-center text-gray-500">No menu items found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

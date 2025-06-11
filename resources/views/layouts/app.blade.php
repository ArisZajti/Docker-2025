<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Food</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-yellow-300 min-h-screen">
    <nav class="bg-indigo-700 text-white py-4 mb-8 shadow">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="{{ route('menus.index') }}" class="text-2xl font-bold tracking-wide">Magic Food</a>
            <div>
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="ml-4 bg-white text-indigo-700 px-3 py-1 rounded hover:bg-gray-100">Login</a>
                    <a href="{{ route('register') }}" class="ml-2 bg-white text-indigo-700 px-3 py-1 rounded hover:bg-gray-100">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>

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
            <button id="mobile-menu-btn" class="md:hidden ml-2 p-2 rounded focus:outline-none focus:ring-2 focus:ring-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <div id="desktop-menu" class="hidden md:flex items-center">
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
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            @auth
                <form method="POST" action="{{ route('logout') }}" class="block mb-2">
                    @csrf
                    <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block bg-white text-indigo-700 px-3 py-2 rounded mb-2 hover:bg-gray-100">Login</a>
                <a href="{{ route('register') }}" class="block bg-white text-indigo-700 px-3 py-2 rounded hover:bg-gray-100">Register</a>
            @endauth
        </div>
    </nav>
    <main class="px-2 md:px-0">
        @yield('content')
    </main>
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const desktopMenu = document.getElementById('desktop-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
        window.addEventListener('resize', () => {
            if(window.innerWidth >= 768) {
                menu.classList.add('hidden');
                desktopMenu.classList.remove('hidden');
            } else {
                desktopMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyApp</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">

<nav class="bg-white border-b px-6 py-3 flex justify-between items-center">

    <div class="flex items-center gap-4">
        <span class="font-semibold">MyApp</span>
        <span class="text-gray-500">Dashboard</span>
    </div>

    <div class="flex items-center gap-3 text-sm">
        <span>{{ auth()->user()->name }}</span>

        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-xs">
            {{ auth()->user()->role }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-red-500 hover:underline">
                Logout
            </button>
        </form>
    </div>

</nav>

<!-- CONTENT -->
<main class="p-6">

    @if(session()->has('error'))
        <div class="mb-4 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-600">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

</main>
</body>
</html>

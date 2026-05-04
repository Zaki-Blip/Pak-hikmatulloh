<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyApp</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 text-gray-200 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white/10 backdrop-blur border-b border-white/20 px-6 py-3 flex justify-between items-center">

        <div class="flex items-center gap-4">
            <span class="font-semibold">MyApp</span>
            <span class="text-gray-400">Dashboard</span>
        </div>

        <div class="flex items-center gap-3 text-sm">
            <span>{{ auth()->user()->name }}</span>

            <span class="bg-emerald-500 text-white px-2 py-1 rounded">
                {{ auth()->user()->role }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-400 hover:underline">
                    Logout
                </button>
            </form>
        </div>

    </nav>

    <!-- CONTENT -->
    <main class="p-6">

        @if(session()->has('error'))
            <div class="mb-4 p-3 bg-red-500/10 border border-red-500/30 text-red-300 rounded">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </main>

</body>
</html>

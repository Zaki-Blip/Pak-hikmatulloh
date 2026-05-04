<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyApp</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 text-gray-200 min-h-screen"</body></body>

<body nav class="bg-white/10 backdrop-blur border-white/20 px-6 py-3 flex justify-between items-center"></body>

    <div class="flex items-center gap-4">
        <span class="font-semibold">MyApp</span>
<span class="text-gray-400">Dashboard</span>
    </div>

    <div class="flex items-center gap-3 text-sm">
        <span>{{ auth()->user()->name }}</span>

bg-emerald-500 text-white
            {{ auth()->user()->role }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
class="text-red-400 hover:underline"
                Logout
            </button>
        </form>
    </div>

</nav>

<!-- CONTENT -->
<main class="p-6">

    @if(session()->has('error'))
text-red-300">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

</main>
</body>
</html>

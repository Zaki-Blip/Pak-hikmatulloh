<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMKN 64 JAKARTA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-900 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-primary-700 shadow-lg px-6 py-4 flex justify-between items-center sticky top-0 z-50">
        <!-- Logo & Title -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-accent-500 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16l3.84-7.84L12 4l-7.84 2.16L6.16 14z"></path>
                </svg>
            </div>
            <span class="font-bold text-xl text-white tracking-tight">SchoolMS</span>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('user.dashboard') }}" class="text-primary-100 hover:text-white text-sm font-medium transition">Dashboard</a>
            @if(auth()->user()->role === 'admin' || auth()->user()->role === 'user')
                <a href="{{ route('students.index') }}" class="text-primary-100 hover:text-white text-sm font-medium transition">Siswa</a>
            @endif
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.secret') }}" class="text-primary-100 hover:text-white text-sm font-medium transition">Admin</a>
            @endif
        </div>

        <!-- User Menu -->
        <div class="flex items-center gap-4">
            <div class="text-right hidden sm:block">
                <p class="text-white font-semibold text-sm">{{ auth()->user()->name }}</p>
                <span class="text-primary-200 text-xs capitalize">{{ auth()->user()->role }}</span>
            </div>
            <div class="w-10 h-10 bg-accent-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-primary-800 hover:bg-primary-900 text-white px-4 py-2 rounded-lg text-sm font-medium transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="hidden sm:inline">Logout</span>
                </button>
            </form>
        </div>
    </nav>

    <!-- Mobile Nav -->
    <nav class="md:hidden bg-primary-800 px-4 py-3 flex gap-4 overflow-x-auto">
        <a href="{{ route('user.dashboard') }}" class="text-primary-100 hover:text-white text-sm font-medium whitespace-nowrap">Dashboard</a>
        <a href="{{ route('students.index') }}" class="text-primary-100 hover:text-white text-sm font-medium whitespace-nowrap">Siswa</a>
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.secret') }}" class="text-primary-100 hover:text-white text-sm font-medium whitespace-nowrap">Admin</a>
        @endif
    </nav>

    <!-- CONTENT -->
    <main class="p-4 md:p-8 max-w-7xl mx-auto">
        @if(session()->has('error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                {{ session('error') }}
            </div>
        @endif

        @if(session()->has('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl flex items-center gap-3">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>

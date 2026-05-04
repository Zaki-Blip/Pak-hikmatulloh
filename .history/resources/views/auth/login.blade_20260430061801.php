@extends('layouts.guest')

@section('content')

<div class="w-full max-w-md">
    <!-- Logo Card -->
    <div class="text-center mb-8">
        <div class="w-20 h-20 bg-primary-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16l3.84-7.84L12 4l-7.84 2.16L6.16 14z"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-slate-800">SchoolMS</h1>
        <p class="text-slate-500 mt-1">School Management System</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-2xl shadow-xl border border-slate-200 p-8">
        <h2 class="text-xl font-semibold text-slate-800 mb-6">Masuk ke Akun</h2>

        @if(session()->has('error'))
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-600 rounded-lg text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                <input type="email" name="email" placeholder="email@sekolah.sch.id"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                <input type="password" name="password" placeholder="••••••••"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition">
            </div>

            <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-3 rounded-xl font-semibold transition shadow-md">
                Masuk
            </button>
        </form>
    </div>

    <p class="text-center text-slate-500 text-sm mt-6">
        &copy; {{ date('Y') }} School Management System
    </p>
</div>

@endsection

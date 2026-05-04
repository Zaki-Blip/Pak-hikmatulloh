@extends('layouts.guest')

@section('content')

<div class="w-full max-w-md">
    <div class="text-center mb-8">
        <p class="text-sm uppercase tracking-[0.3em] text-green-600 font-semibold">Sistem Informasi Sekolah</p>
        <h1 class="text-3xl font-bold text-slate-900 mt-4">Sekolah Pintar Indonesia</h1>
        <p class="text-slate-500 mt-3">Jl. Pendidikan No. 7, Jakarta Selatan</p>
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

            <button class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl font-semibold transition shadow-md">
                Masuk
            </button>
        </form>
    </div>

    <p class="text-center text-slate-500 text-sm mt-6">
        &copy; {{ date('Y') }} All rights reserved.
    </p>
</div>

@endsection

@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold mb-6 text-gray-200">
    Admin Dashboard
</h1>

<div class="grid md:grid-cols-3 gap-5">

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Users</p>
        <h2 class="text-2xl font-semibold mt-1">1,247</h2>
    </div>

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Actions</p>
        <h2 class="text-2xl font-semibold mt-1">89</h2>
    </div>

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Uptime</p>
        <h2 class="text-2xl font-semibold mt-1">99.9%</h2>
    </div>

</div>

<div class="mt-10">
    <a href="{{ route('admin.secret') }}"
   class="inline-block mt-4 bg-purple-600 hover:bg-purple-500 text-white px-5 py-3 rounded-lg transition">
    Go to Secret Vault →
</a>
</div>

@endsection

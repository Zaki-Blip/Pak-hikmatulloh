@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto text-center">
    <div class="bg-amber-50 border border-amber-200 rounded-2xl p-12 mb-6">
        <div class="w-20 h-20 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-slate-800 mb-2">Area Admin</h1>
        <p class="text-slate-500">Halaman ini hanya bisa diakses oleh Administrator.</p>
    </div>
</div>

@endsection
